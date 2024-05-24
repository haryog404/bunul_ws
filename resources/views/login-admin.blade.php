@extends('layout.base-layout')
@section('title', 'Login Admin')
@section('active5', 'active')
@section('content')
  <style>
      body {
        background-color: #f9fafc;
        position: static;
      }
      .main {
        position: absolute;
        width: 100%;
        height: 100%;
        margin-top: 9%;
      }
      h1 {
          font-size: 60px;
        }
        .page-title {
            position: relative; /* suaikan dengan tinggi navbar *//* Sesuaikan ukuran teks */
            color: transparent; /* Warna teks transparan */
            background: -webkit-linear-gradient(#000000, #e0e0e0); /* Efek gradient sebagai background teks */
            -webkit-background-clip: text; /* Menggunakan teks sebagai clip pada background */
            -webkit-text-fill-color: transparent; /* Membuat warna teks transparan */
            font-weight: bold; /* Menambahkan tebal pada teks */
            z-index: 999; /* Membuat teks berada di atas konten lain */
            text-align: center;
        }


        .bima {
          padding: 2%;
            justify-content: center;
            display: flex;
        }
        .report-form {
            margin-left: 20px;
            border: solid;
            margin-top:2.5rem;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        /*     float: right; Tambahkan ini */
        }

          .report-form h2 {
            text-align: center;
            margin-bottom: 30px;
          }
          
          .report-form .form-group {
            margin-bottom: 20px;
          }
          
          .report-form label {
            display: block;
            margin-bottom: 5px;
          }
          
          .report-form input[type="text"],
          .report-form input[type="password"],
          .report-form input[type="date"],
          .report-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
          }
          
          .report-form textarea {
            height: 150px;
          }
          
          .report-form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
          }
          
          .report-form input[type="checkbox"] {
            margin-right: 10px;
          }
          
          .report-form button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #262626;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
          }
          
          .report-form button[type="submit"]:hover {
            background-color: #262626;
          }
          .report-form input[type="file"] {
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 8px;
            width: 100%;
        }

        .report-form input[type="file"]:focus {
            outline: none;
        }

        .report-form input[type="file"]::-webkit-file-upload-button {
            background-color: #262626;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .report-form input[type="file"]:hover::-webkit-file-upload-button {
            background-color: #262626;
        }

        .keterangan { 
            white-space: -moz-pre-wrap;
            word-wrap: break-word;
        }

        .keterangan p {
            text-align: center;
            font-size: 13px;
        }
        .image-pelengkap { 
            width: 90%;
        }
  </style>
<body>

<div class="row main h-75">
    <div class="col-7 my-auto mx-auto p-5 ">
        <img class="ms-3 image-pelengkap" src="{{url('/assets/bg-login.jpeg')}}" alt="">
    </div>
    <div class="col-4 my-auto me-5 pe-5">
    <div class="row page-title">
        <h1><b>Login Admin</b></h1>
    </div>
    <div class="row keterangan">
        <p>Laman ini disediakan hanya untuk <strong>pengurus RW 6 Bunulrejo</strong> dan <strong>perangkat yang bertanggungjawab</strong>. Warga setempat yang tidak memiliki keperluan khusus <strong>tidak perlu mengakses laman ini.</strong></p>
    </div>
    <div class="bima row">
      
    <div class="report-form mx-auto mt-0">
        <form method="post" action="{{url('/submit-admin')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="report-title">Email</label>
            <input type="text" required placeholder="" name="email">
          </div>
          <div class="form-group">
            <label for="report-content">Password</label>
            <input type="password" required placeholder="" name="password">
          </div>
          <button type="submit">Login</button>
        </form>
      </div>
    </div>
    </div>
</div>
@endsection