// ==UserScript==
// @name         YaBot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  Script for search
// @author       Smirnova Anna
// @match        https://www.ask.com/*
// @match        https://napli.ru/*
// @match        https://kiteuniverse.ru/*
// @match        https://motoreforma.com/*
// @icon         https://ask.com/
// @grant        none
// ==/UserScript==


let sites = {
  "napli.ru": [
    "DevTools для разработчика",
    "Установка и настройка Git, Node JS",
    "Отключение редакций",
    "Вывод произвольных типов записей wp",
    "Плагины VS Сode",
  ],
  "kiteuniverse.ru": [
    "Kite Universe Россия",
    "«Красота. Грация. Интеллект»",
    "Наши воздушные змеи",
  ],
  "motoreforma.com": [
    "прошивки для CAN-AM",
    "тюнинг для квадроциклов BRP",
    "вариатор CV-Tech купить",
  ]

}
let site = Object.keys(sites)[getRandom(0, Object.keys(sites).length)];//получили случайный сайт из обьекта
let links = document.links;
let btnK = document.getElementsByClassName("search-submit btn my-1 my-sm-0")[0];
let keywords = sites[site];//получили набор ключевых фраз для конкретного сайта
let keyword = keywords[getRandom(0, keywords.length)];
let askInput = document.getElementsByClassName("form-control mr-sm-1 search-box")[0];

//Работаем с cookie
if (btnK != undefined) {
  document.cookie = "site=" + site;
} else if (location.hostname == "www.ask.com") {
  site = getCookie("site");
} else {
  site = location.hostname;
}


//Работаем на главной странице поисковика
if (btnK != undefined) {
  let i = 0;
  let timerId = setInterval(() => {
    askInput.value += keyword[i];
    i++;
    if (i == keyword.length) {
      clearInterval(timerId);
      btnK.click(); //Кликаем и идем в выдачу
    }
  }, 500);

  //Работаем на целевом сайте
} else if (location.hostname == site) {
  console.log("Мы на целевом сайте!");

  setInterval(() => {
    let index = getRandom(0, links.length);

    if (getRandom(0 , 101) >= 70) {
      location.href = "https://www.ask.com/";
    }
    if (links.length == 0) {
      location.href = site;
    }
    else if (links[index].href.indexOf(site) != -1) {
      links[index].click();
      links[index].removeAttribute("target");
    }
  }, getRandom(3500, 5500))
//Работаем на страницах поисковой выдачи
} else {
  let nextAskPage = true;
  for (let i = 0; i < links.length; i++) {
    if (links[i].href.includes(site)) {
      let link = links[i];
      links[i].removeAttribute("target")
      nextAskPage = false;
      console.log("Нашел строку " + link);
      setTimeout(() => {
        link.click();
           }, getRandom(3500, 5500));
      break;
    }
  }
  let elementExist = setInterval(() => {
    let element = document.getElementsByClassName("PartialWebPagination-selected")[0].children[0].textContent;
    if ( element != null) {
      if (element == "5") {
        nextAskPage = false;
        location.href = "https://www.ask.com/";
      }
      clearInterval(elementExist);
    }
  }, 100)


  if (nextAskPage) {
    setTimeout(() => {
      document.getElementsByClassName("PartialWebPagination-link-text next-link")[0].click();
    }, getRandom(5000, 7000));
  }
}

function getRandom(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}
function getCookie(name) {
  let matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
