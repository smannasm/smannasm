// ==UserScript==
// @name         Bot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       Smirnova Anna
// @match        https://www.ask.com/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// ==/UserScript==

let links= document.links;
let btnK = document.getElementsByClassName("search-submit btn my-1 my-sm-0")[0];
let keywords = ["10 самых популярных шрифтов на Google", "Сайт недвидимости", "Отключение редакций и ревизий в WordPress"]

if(btnK != undefined) {
  document.getElementsByClassName("form-control mr-sm-1 search-box")[0].value = "Сайт недвижимости";
  btnK.click();
} else {
  for (let i = 0; i< links.length; i++){
    if (links[i].href.includes("bn")){
      links[i].removeAttribute("target");
      let link = links[i];
            console.log("find "+ link);
      link.click();
      break;
    }
  }
}
