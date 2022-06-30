<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Create new provider</title>
</head>
<body class="flex items-center justify-center h-screen">
    <form action="../Controller/Provider.php" method="POST">
<fieldset class="flex flex-col p-4 m-5 border border-purple-400 w-400">
    <section class="">
        Seus Dados
            <article>
            <input type="text" id="name" name="name" placeholder="Nome" class="p-2 m-2 field">
            </article>
            <article>
            <input type="text" id="phone" name="phone"  placeholder="Telefone" class="p-2 m-2 field">
            </article>
            <article>
            <input type="text" id="cnpj" name="cnpj" placeholder="Cnpj" class="p-2 m-2 field">
            </article>
            </section>
            <section class="grid grid-cols-2">
                Endereço
                <p></p>
            <article>
            <input type="text" id="publicPlace" name="publicPlace"  placeholder="Rua" class="p-2 m-2 field">
            </article>
            <article>
            <input type="text" id="numberOfStreet" name="numberOfStreet"  placeholder="Número" class="p-2 m-2 field">
            </article>
            <article>
            <input type="text" id="complement" name="complement"  placeholder="Complemento" class="p-2 m-2 field">
            </article>
            <article>
            <input type="text" id="neighborhood" name="neighborhood"  placeholder="Bairro" class="p-2 m-2 field">
            </article>
            <article>
            <input type="text" id="city" name="city"  placeholder="Cidade" class="p-2 m-2 field">
            </article>
            <article>
            <input type="text" id="zipCode" name="zipCode"  placeholder="CEP" class="p-2 m-2 field">
            </article>
            </section>
            <button type="submit" class="px-4 py-2 font-bold text-white bg-purple-500 rounded shadow hover:bg-purple-400 focus:shadow-outline focus:outline-none">Cadastrar</button>
</fieldset>
</form>
</body>
</html>