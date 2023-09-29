<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
      *{
        margin:0;
        box-sizing: border-box;
      }
      #add{
        color:#4caf93;
      }
      #addbtn {
        background:#4caf93;
        color: white;
      }
      nav {
        background: #4caf93;
        width: 15%;
        height: 100vh;
        padding: 0;
        display: flex;
        flex-direction: column;
      }
      
      nav #lists {
        display: flex;
        width: 100%;
        padding: 1rem;
        font-size: 1.4rem;
        color: #ececec;
        flex-flow: row-reverse;
      }
      nav ul{
        list-style: none;
        padding: 0;
      }
      nav a{
        display: flex;
        text-decoration: none;
        color: white;
        width: 100%;
        padding-left: 0.4rem;
        padding: 0.5rem 0.5rem;
        font-size: 1.4rem;
        align-items: center;
      }
      nav a:hover{
        background: #fff;
        color:#4caf93;
      }
      nav span{
        padding: 0.4rem 0.6rem;
      }
      nav #home {
        background: #fff;
        color:#4caf93;
      }
      nav #logout {
        margin-top: 2rem;
        color: rgba(255, 0, 0, 0.8);
        font-weight: bold;
      }
      .new {
        display: flex;
      }
        form {
          display: flex;
          flex-direction: column;
          width: 100%;
          padding-left: 1rem;
          padding-top: 1rem;
        }
        #registersuccess {
          display: flex;
          width: 100%;
          height: fit-content;
          justify-content: center;
          align-items: center;
        }
      @media (max-width: 1150px) {
        nav{
          width: 30%;
        }
      }
      @media (max-width: 750px) {
        nav #home {
          background:#4caf93;
          color: white;
        }
        nav li{
          display: flex !important;
        }
        nav{
          width: 100%;
          flex-direction: row;
          height: fit-content;
          justify-content: space-between;
          align-items: center;
          padding: 0;
        }
        nav .mycontent{
          display: flex;
        }
        nav ul{
          display: flex;
          margin: 0;
        }
        nav a{
          font-size: 1rem;
          width: fit-content;
        }
        nav #lists{
          padding: 1rem;
          flex-flow: row;
          width: fit-content;
        }
        nav #logout{
          margin: 0;
        }
        .new{
          flex-direction: column;
        }
      }
      @media (max-width: 500px){
        nav{
          width: 100%;
          flex-direction: row;
          height: fit-content;
          justify-content: space-between;
          align-items: center;
          padding: 0;
          font-size: 1rem !important;
        }
        
        nav .mycontent{
          display: flex;
          flex-wrap: wrap;
        }
        nav ul{
          display: flex;
          margin: 0;
          flex-wrap: wrap;
        }
        nav li{
          width: 100%;
        }
        nav a{
          font-size: 1rem;
          width: 100%;
        }
        nav #lists{
          display: none;
        }
        nav #logout{
          margin: 0;
        }
      }
      

    </style>
  </head>
  <body>
    <?php
    session_start();
    ?>