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
        <figure class="full-width">
            <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=80" alt="Test plein bord">
        </figure>

        <section>
            <h1>Bienvenue dans le Lab</h1>
            <p>Le rail de 1200px est désormais le seul garant de la structure centrale.</p>
        </section>

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
        document.addEventListener('DOMContentLoaded', () => {
            const trigger = document.getElementById('hamburger-trigger');
            const menu = document.getElementById('main-nav');
            const body = document.body;

            // Gestion du Menu Mobile
            if (trigger && menu) {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    
                    // Utilisation des classes définies dans le SCSS
                    trigger.classList.toggle('is-active');
                    menu.classList.toggle('is-open');

                    // Bloque le scroll du site quand le menu est ouvert
                    if (menu.classList.contains('is-open')) {
                        body.style.overflow = 'hidden';
                    } else {
                        body.style.overflow = '';
                    }
                });

                // Fermeture automatique si on clique sur un lien du menu
                const links = menu.querySelectorAll('a');
                links.forEach(link => {
                    link.addEventListener('click', () => {
                        trigger.classList.remove('is-active');
                        menu.classList.remove('is-open');
                        body.style.overflow = '';
                    });
                });
            }

            // Gestion de l'Accessibilité
            const accBtn = document.getElementById('toggle-accessibility');
            if (accBtn) {
                accBtn.addEventListener('click', () => {
                    body.classList.toggle('is-accessible');
                });
            }
        });
    </script>

</body>
</html>