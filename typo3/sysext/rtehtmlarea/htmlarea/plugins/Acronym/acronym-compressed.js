Acronym=function(editor){this.editor=editor;var cfg=editor.config;var actionHandlerFunctRef=Acronym.actionHandler(this);cfg.registerButton("Acronym",Acronym_langArray["Insert/Modify Acronym"],editor.imgURL("ed_acronym.gif","Acronym"),false,actionHandlerFunctRef);};Acronym.I18N=Acronym_langArray;Acronym._pluginInfo={name:"Acronym",version:"1.4",developer:"Stanislas Rolland",developer_url:"http://www.fructifor.ca/",c_owner:"Stanislas Rolland",sponsor:"Fructifor Inc.",sponsor_url:"http://www.fructifor.ca/",license:"GPL"};Acronym.actionHandler=function(instance){return(function(editor){instance.buttonPress(editor);});};Acronym.prototype.buttonPress=function(editor){var editorNo=editor._doc._editorNo;var backreturn;var addUrlParams="?"+RTEarea[0]["RTEtsConfigParams"];editor._popupDialog(RTEarea[0]["pathAcronymModule"]+addUrlParams+"&editorNo="+editorNo,null,null,570,280);return false;};

