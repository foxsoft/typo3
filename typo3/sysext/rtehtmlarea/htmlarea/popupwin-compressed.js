PopupWin=function(editor,_title,handler,initFunction,width,height,_opener){this.editor=editor;this.handler=handler;if(typeof(initFunction)=="undefined")var initFunction=window;this._geckoOpenModal(editor,_title,handler,initFunction,width,height,_opener);};PopupWin.prototype._parentEvent=function(ev){if(this.dialogWindow&&!this.dialogWindow.closed){if(!ev)var ev=this.dialogWindow.opener.event;HTMLArea._stopEvent(ev);this.dialogWindow.focus();};return false;};PopupWin.prototype._geckoOpenModal=function(editor,_title,handler,initFunction,width,height,_opener){if(!editor)var editor=this.editor;var dlg=editor._iframe.contentWindow.open("","","toolbar=no,menubar=no,personalbar=no,width="+(width?width:100)+",height="+(height?height:100)+",scrollbars=no,resizable=yes,modal=yes,dependent=yes,top=100,left=100");if(!dlg)var dlg=window.open("","","toolbar=no,menubar=no,personalbar=no,width="+(width?width:100)+",height="+(height?height:100)+",scrollbars=no,resizable=yes,modal=yes,dependent=yes,top=100,left=100");this.dialogWindow=dlg;if(typeof(_opener)!="undefined")this._opener=_opener;else this._opener=this.dialogWindow.opener;this._opener.dialog=this;if(Dialog._modal&&!Dialog._modal.closed)Dialog._dialog=this;var doc=this.dialogWindow.document;this.doc=doc;if(doc.all){doc.open();var html="<html><head></head><body></body></html>\n";doc.write(html);doc.close();};var html=doc.documentElement;html.className="popupwin";var head=doc.getElementsByTagName("head")[0];if(!doc.all)var head=doc.createElement("head");var title=doc.createElement("title");head.appendChild(title);doc.title=_title;var link=doc.createElement("link");link.rel="stylesheet";link.type="text/css";if(_editor_CSS.indexOf("http")==-1)link.href=_typo3_host_url+_editor_CSS;else link.href=_editor_CSS;head.appendChild(link);if(!doc.all)html.appendChild(head);var body=doc.body;if(!doc.all)var body=doc.createElement("body");body.className="popupwin dialog";body.id="--HA-body";var content=doc.createElement("div");content.className="content";this.content=content;body.appendChild(content);if(!doc.all)html.appendChild(body);this.element=body;initFunction(this);this.captureEvents();this.dialogWindow.focus();};PopupWin.prototype._dlg_close_on_esc=function(ev){if(!ev)var ev=window.event;if(ev.keyCode==27){this.close();return false;};return true;};PopupWin.prototype.callHandler=function(){var tags=["input","textarea","select"];var params=new Object();for(var ti=tags.length;--ti>=0;){var tag=tags[ti];var els=this.content.getElementsByTagName(tag);for(var j=0;j<els.length;++j){var el=els[j];var val=el.value;if(el.tagName.toLowerCase()=="input"){if(el.type=="checkbox"){val=el.checked;}};params[el.name]=val;}};this.handler(this,params);return false;};PopupWin.prototype.captureEvents=function(){var editor=this.editor;var _opener=this._opener;var self=this;function capwin(w){if(HTMLArea.is_gecko){w.addEventListener("focus",self._parentEvent,true);}else{HTMLArea._addEvent(w,"focus",function(ev){self._parentEvent(ev);});};for(var i=0;i<w.frames.length;i++){capwin(w.frames[i]);}};capwin(window);HTMLArea._addEvent(window,"unload",function(){self.releaseEvents();self.close();return false;});if(HTMLArea.is_gecko)HTMLArea._addEvent(editor._iframe.contentWindow,"unload",function(){self.releaseEvents();self.close();return false;});HTMLArea._addEvent(self.dialogWindow,"unload",function(){self.releaseEvents();self.close();return false;});HTMLArea._addEvent(self.doc,"keypress",function(ev){return self._dlg_close_on_esc(ev);});};PopupWin.prototype.releaseEvents=function(){var editor=this.editor;var _opener=this._opener;if(_opener&&!_opener.closed){var self=this;function relwin(w){if(HTMLArea.is_gecko)HTMLArea._removeEvent(w,"focus",self._parentEvent);else HTMLArea._removeEvent(w,"focus",function(ev){self._parentEvent(ev);});try{for(var i=0;i<w.frames.length;i++){relwin(w.frames[i]);};}catch(e){};};relwin(_opener);HTMLArea._removeEvent(_opener,"unload",function(){if(!self.dialogWindow.closed){self.releaseEvents();self.close();};return false;});if(HTMLArea.is_gecko)HTMLArea._addEvent(editor._iframe.contentWindow,"unload",function(){self.releaseEvents();self.close();return false;});}};PopupWin.prototype.close=function(){if(this.dialogWindow&&this.dialogWindow.dialog){this.dialogWindow.dialog.releaseEvents();this.dialogWindow.dialog.close();this.dialogWindow.dialog=null;};if(this.dialogWindow){this.releaseEvents();if(!this.dialogWindow.closed){this.dialogWindow.close();this.dialogWindow=null;}};if(HTMLArea.is_gecko&&this._opener){if(this._opener.dialog)this._opener.dialog=null;if(!this._opener.closed)this._opener.focus();}};PopupWin.prototype.addButtons=function(){var self=this;var div=this.doc.createElement("div");this.content.appendChild(div);div.className="buttons";for(var i=0;i<arguments.length;++i){var btn=arguments[i];var button=this.doc.createElement("button");div.appendChild(button);switch(btn){case "ok":button.innerHTML=HTMLArea.I18N.dialogs["OK"];button.onclick=function(){try{self.callHandler();}catch(e){};self.close();return false;};break;case "cancel":button.innerHTML=HTMLArea.I18N.dialogs["Cancel"];button.onclick=function(){self.close();return false;};break;}}};PopupWin.prototype.showAtElement=function(){var popup=this;var doc=popup.dialogWindow.document;if(HTMLArea.is_gecko&&!HTMLArea.is_safari){setTimeout(function(){try{popup.dialogWindow.sizeToContent();popup.dialogWindow.innerWidth+=20;}catch(e){popup.resizeWindow();};var x=popup._opener.screenX+(popup._opener.outerWidth-popup.dialogWindow.outerWidth)/2;var y=popup._opener.screenY+(popup._opener.outerHeight-popup.dialogWindow.outerHeight)/2;try{popup.dialogWindow.moveTo(x,y);}catch(e){}},25);}else{var innerX,innerY;if(popup.dialogWindow.innerHeight){innerX=popup.dialogWindow.innerWidth;innerY=popup.dialogWindow.innerHeight;}else if(doc.documentElement&&doc.documentElement.clientHeight){innerX=doc.documentElement.clientWidth;innerY=doc.documentElement.clientHeight;}else if(document.body){innerX=doc.body.clientWidth;innerY=doc.body.clientHeight;};var pageX,pageY;var test1=doc.body.scrollHeight;var test2=doc.body.offsetHeight;if(test1>test2){pageX=doc.body.scrollWidth;pageY=doc.body.scrollHeight;}else{pageX=doc.body.offsetWidth;pageY=doc.body.offsetHeight;};popup.dialogWindow.resizeBy(pageX-innerX,pageY-innerY);if(HTMLArea.is_opera)this.resizeWindow();popup.dialogWindow.moveTo((screen.availWidth-doc.body.offsetWidth)/2,(screen.availHeight - doc.body.offsetHeight)/2);}};PopupWin.prototype.resizeWindow=function(){var win=this.dialogWindow;var doc=win.document;var docElement=doc.documentElement;var body=doc.body;var myW=0,myH=0;var contentWidth=this.content.offsetWidth;var contentHeight=this.content.offsetHeight;win.resizeTo(contentWidth+200,contentHeight+200);if(win.innerWidth){myW=win.innerWidth;myH=win.innerHeight;}else if(docElement&&docElement.clientWidth){myW=docElement.clientWidth;myH=docElement.clientHeight;}else if(body&&body.clientWidth){myW=body.clientWidth;myH=body.clientHeight;};win.resizeTo(contentWidth+((contentWidth+200)-myW),contentHeight+((contentHeight+200)-(myH-16)));};

