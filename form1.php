<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
                  background: linear-gradient(to right,#0a0a00,#b3b310);
                  text-align: center;
            }
        p{
                color:rgb(0, 0, 0);
                background-color: white;
                text-shadow: 3px 2px 5px rgb(252, 235, 3);
            }
        .container{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
        fieldset{
            margin-left: 28rem;
            margin-top: 5rem;
            align-items: center;
            width: 25rem;
            background-color: rgb(13, 14, 13);
        }
        h1{
            text-align: center;
        }
        #hasile{
            background-color:white;
            margin-top: 1rem;
            margin-left: 0rem;
            color: black;
            text-shadow: 2px 2px 5px rgb(243, 207, 4);
            width:25rem;
        }
        label{
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 5px rgb(243, 207, 4);
        }
        legend{
            font-size: 0.7rem;
            color: white;
            text-shadow: 2px 2px 5px rgb(243, 207, 4);
            border-radius: 50% ;
            background-color: rgb(13, 14, 13);
            width: 10rem;
            align-items: center;
            justify-content: center;
        }
        .contain1{
            width: 11rem;
            text-align: right; 
            display: grid;
            grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        }
        .contain2{
            width: 14rem;
            display: grid;
            grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend><h1>Data Diri</h1></legend>
        <p>Disini saya akan mulai dengan mengisis data diri saya sendiri</p>
        <form  id="form" action="form2.php" method="POST" name="form_user">
            <div class="container">
                <div class="contain1">
                    <div> <label for="name">Nama Lengkap :</label></div>
                    <div><label for="NIM">NIM :</label></div>
                    <div><label for="TB">Tinggi Badan :</label></div>
                    <div><label for="BB">Berat Badan :</label></div>
                    <div><label for="panggil1">Panggilan pertama :</label></div>
                    <div><label for="panggil2">Panggilan kedua :</label></div>
                    <div><label for="panggil3">Panggilan ketiga :</label></div>
                </div>
                <div class="contain2">
                    <div>
                        <input type="text"  name="namasaya">
                    </div>
                    <div >
                        <input type="text"  name="Nim">
                    </div>
                    <div >
                        <input type="text"  name="Tb">
                    </div>
                    <div >
                        <input type="text"  name="Bb">
                    </div>
                    <div >
                        <input type="text"  name="P1">
                    </div>
                    <div >
                        <input type="text" name="P2">
                    </div>
                    <div >
                        <input type="text" name="P3">
                    </div>
                </div>
            </div>
            <input type="submit" value="submit" name="submit"><br>
        </form>
    </fieldset>
</body>
</html>