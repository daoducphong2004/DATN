<style>
    body {
        /* overflow-x: hidden; */
    }

    div#actiontree {
        float: left;
        font-family: Arial;
        font-size: 15px;
        margin-top: 10px;
        margin-left: 25px;
    }

    ul {
        list-style: none;
    }

    p.root {
        font-weight: bold;
        color: #369;
        font-size: 18px;
    }

    .tree,
    .tree ul {
        margin: 0 0 0 1em;
        /* indentation */
        padding: 0;
        list-style: none;
        color: #369;
        position: relative;
    }

    .tree ul {
        margin-left: .5em
    }

    /* (indentation/2) */

    .tree:before,
    .tree ul:before {
        content: "";
        display: block;
        width: 0;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        border-left: 1px solid;
    }

    .tree li {
        margin: 0;
        padding: 0 1.5em;
        /* indentation + .5em */
        padding-bottom: 0.5em;
        line-height: 1.675em;
        /* default list item's `line-height` */
        font-weight: bold;
        position: relative;
        margin-top: 10px;
    }

    .tree li:before {
        content: "";
        display: block;
        width: 10px;
        /* same with indentation */
        height: 0;
        border-top: 1px solid;
        margin-top: -1px;
        /* border top width */
        position: absolute;
        top: 1em;
        /* (line-height/2) */
        left: 0;
    }

    .tree li:last-child:before {
        background: white;
        /* same with body background */
        height: auto;
        top: 1em;
        /* (line-height/2) */
        bottom: 0;
    }

    ul.menu {
        display: none;
        position: absolute;
        background: white;
        z-index: 99;
        padding: 8px 0;
        width: 160px;
        border: solid 1px #dfdfdf;
        box-shadow: 1px 1px 2px #cfcfcf;
    }

    ul.menu li {
        padding: 4px 12px;
        color: #0066AA;
        font-family: Arial;
        font-size: 15px;
        cursor: pointer;
    }

    ul.menu li:hover {
        color: white !important;
        background: #0066AA;
    }

    .sep {
        background: initial !important;
        cursor: initial !important;
        padding: 0 !important;
        font-size: 10px !important;
    }

    #actiontree img {
        width: 10px;
        height: 10px;
    }

    .book-name,
    .chapter-name {
        cursor: context-menu;
        line-height:
    }

    .book-name:hover,
    .chapter-name:hover {
        opacity: 0.6;
    }

    .book-name.current,
    .chapter-name.current {
        color: red;
    }

    .book-status,
    .li-link {
        margin-right: 6px;
        font-size: 18px;
        color: black;
        cursor: pointer;
    }

    span.series_name {
        cursor: context-menu;
    }
</style>
