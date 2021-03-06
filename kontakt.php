<?php /* Template Name: Contact */ ?>

<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8" />
    <title>Labb 1</title>
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.js"></script>
</head>

<body>

    <div id="wrap">

        <?php get_header(); ?>

        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h1>Kontakt</h1>
                            <form>
                                <label>Namn</label>
                                <input type="text" />
                                <label>E-post</label>
                                <input type="email" />
                                <label>Meddelande</label>
                                <textarea></textarea>
                                <input type="submit" value="Skicka" />
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php get_footer(); ?>