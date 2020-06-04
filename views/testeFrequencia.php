<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <table border="solid">
            <tr>
                <td>NOME ALUNO</td>
                <td>V</td>
                <td>F</td>
            </tr>
            <tr>
                <td>MARCOS ARTHUR</td>
                <td><input type="radio" name="presensa-1" value="1" class="input-c" data-id="1"></td>
                <td><input type="radio" name="presensa-1" value="0" class="input-c" data-id="2"></td>
            </tr>
            <tr>
                <td>MARCOS ARTHUR</td>
                <td><input type="radio" name="presensa-2" value="1" class="input-c" data-id="1"></td>
                <td><input type="radio" name="presensa-2" value="0" class="input-c" data-id="2"></td>
            </tr>
        </table>
    </form>

    <script>

        let inputs = document.querySelectorAll('.input-c');

        inputs.forEach(e => {
            e.addEventListener('change', element => {

                fetch(`pagina.php?id=${element.target.dataset.id}&value=${element.target.value}`)
                .then(response => response.json())
                .then(response => {
                    console.log(response)
                })
            })
        })
    </script>
</body>
</html>