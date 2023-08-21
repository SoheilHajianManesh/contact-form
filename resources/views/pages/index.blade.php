<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    @livewireStyles
</head>
<style>
      body {
        margin: 0;
        background-color:#ADF6A8;
      }
      .input-height{
        height:px;
      }
      .fs-1 {
        font-size: 2.4rem !important;
      }
      .f-color-1 {
        color: #129109;
        opacity: 50%;
      }
      .btn-color-1 {
        background-color: #129109;
      }
      a:hover {
        color: #38d39f;
      }
      .btn:hover{
        background-color: #38d39f !important;
      }

      
    </style>
  </head>
  <body>
    <div class="container px-0">
      <div class="row  vh-100 align-items-center justify-content-center">
        <div class="col-8">
          	@livewire('components.login')
        </div>
      </div>
    </div>
    @livewireScripts
</body>
</html>

