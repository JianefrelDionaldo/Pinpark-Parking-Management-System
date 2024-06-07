/*
::  This is my app.js module, which means it can import other JS modules.
::  And now, CSS and JSON too
::  Chrome 91 added CSS imports.
::  Edge and Opera have these too.
::  Support in Firefox is under development.
*/

/*
::  JSON
::  Static Import

::  Example: 
    *variable (data)
::  import data fron "./data.json" assert { type: "json" }; 
:: console.log(data.characters);

::  JSON
::  Dynamic Import

::  setTimeout(() => {
      console.log("times up");
      import("./data.json", { assert: { type: "json" } }).then(mod) => {
        *varible (mod)
        console.log(mod.default);
      }
    }, 2000);
*/

/*
::  CSS

    *variable (sheet)
::  import sheet from "./main.css" assert { type: 'css' };
::  document.adoptedStyleSheets = [sheet];
*/
