<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Ceci est une page dynamique</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>

        <div id="contenuAsynchrone">
            <!-- Vide au chargement -->
            <div class="lds-ellipsis"><div>
                </div><div></div><div></div><div></div>
            </div>
        </div>
            <script>
                fetch("./monContenuAsynchrone.php")
                    .then((response) => response.json())
                    .then((datas) => {
                        document.getElementById("contenuAsynchrone").innerHTML = "";

                        datas.forEach((el) => {
                            document
                                .getElementById("contenuAsynchrone")
                                .insertAdjacentHTML("beforeend", "<div class='border'>" + el + "</div>");
                        });
                    });
            </script>
    </body>
</html>