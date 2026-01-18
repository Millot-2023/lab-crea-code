<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB-CREA-CODE | Book Architecture</title>
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
</head>
<body>

<?php include 'includes/header.php'; ?>

    <main>
        <section>
            <h1>Bienvenue dans le Lab</h1>
            <p>Le rail de 1200px est désormais le seul garant de la structure centrale.</p>
        </section>

        <figure class="full-width">
            <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=80" alt="Test plein bord">
        </figure>

        <section>
            <div class="flex-grid">
                <article class="card">
                    <h3>Projet A</h3>
                    <p>Vérification de la robustesse CSS demandée.</p>
                </article>
                <article class="card">
                    <h3>Projet B</h3>
                    <p>Vérification de l'alignement.</p>
                </article>
                <article class="card">
                    <h3>Projet C</h3>
                    <p>Architecture stabilisée.</p>
                </article>
            </div>
        </section>
    </main>

<?php include 'includes/footer.php'; ?>

    <script>
        const trigger = document.getElementById('hamburger-trigger');
        const menu = document.getElementById('main-nav');

        if (trigger && menu) {
            trigger.addEventListener('click', () => {
                menu.classList.toggle('is-open');
                trigger.classList.toggle('active');
            });
        }

        const accBtn = document.getElementById('toggle-accessibility');
        if (accBtn) {
            accBtn.addEventListener('click', () => {
                document.body.classList.toggle('is-accessible');
            });
        }
    </script>

</body>
</html>