<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        p{
            color: blue;
        }
        
        .paragraf{
            color: purple;
        }
        
        #teks{
            color: red;
        }
    </style>
</head>
<body>
    halo
    <h1>halo</h1>
    <h2>halo2</h2>
    <h3>halo3</h3>
    <h4>halo4</h4>
    <h5>halo5</h5>
    <h6>halo6</h6>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, accusantium eaque. Dolor, dolorum sed dolorem, ipsum ex fugiat est omnis ad consequuntur rerum soluta numquam atque reiciendis aliquid aut magni?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aliquam veniam, possimus ab voluptates totam laboriosam et consequatur, labore rem fugiat corrupti expedita. Voluptatum nemo ipsam consequuntur nesciunt a eum!</p>
    <a href="https://www.youtube.com">Link ke Youtube</a>
    <img src="{{ asset('images/Spongebob.png') }}" alt="Gambar Spongebob">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br> Eligendi voluptates eaque eius consectetur id numquam aut exercitationem, aperiam commodi saepe cum totam, eos aliquid ipsa distinctio quae dignissimos harum tenetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem fugiat rerum commodi sequi, soluta cum excepturi magni hic deleniti consequatur culpa autem ea quibusdam, minus deserunt iusto quis explicabo blanditiis!</p>
    <hr>

    <form action="https://www.youtube.com">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Submit</button>
    </form>

    <table>
        <tr>
            <td>Nama</td>
            <td>Nim</td>
            <td>Gender</td>
        </tr>
        <tr>
            <td>Davin</td>
            <td>12345678</td>
            <td>Laki</td>
        </tr>
    </table>
    <div style="">
        <p class="paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, accusantium eaque. Dolor, dolorum sed dolorem, ipsum ex fugiat est omnis ad consequuntur rerum soluta numquam atque reiciendis aliquid aut magni?</p>
        <p class="paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aliquam veniam, possimus ab voluptates totam laboriosam et consequatur, labore rem fugiat corrupti expedita. Voluptatum nemo ipsam consequuntur nesciunt a eum!</p>
        <a href="/home">Link ke Youtube</a>
        <p id="teks">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br> Eligendi voluptates eaque eius consectetur id numquam aut exercitationem, aperiam commodi saepe cum totam, eos aliquid ipsa distinctio quae dignissimos harum tenetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem fugiat rerum commodi sequi, soluta cum excepturi magni hic deleniti consequatur culpa autem ea quibusdam, minus deserunt iusto quis explicabo blanditiis!</p>
    </div>
</body>
</html>