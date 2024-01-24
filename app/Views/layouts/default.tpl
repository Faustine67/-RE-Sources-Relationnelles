<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {block name="title"}{/block}</title>
    <link rel="stylesheet" type="text/css" href="../public/styles.css" />
    {block name="styles"}{/block}
</head>

<body>
    {include file="templates/header.tpl"}
    <main>
        <h1>
            {block name="content-title"}{/block}
        </h1>
        {block name="content"}{/block}
    </main>

    {include file="templates/footer.tpl"}

    {block name="js"} {/block}
</body>

</html>