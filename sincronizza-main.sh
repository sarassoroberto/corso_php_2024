# Visualizza i repository remoti collegati al tuo repository locale
git remote

# Aggiunge il repository originale come remoto al tuo repository locale
git remote add upstream https://github.com/corsidrive/corso_php_2024.git

# Recupera le modifiche dal repository originale
git fetch upstream

# Passa al branch principale (main)
git checkout main

# Esegue il merge delle modifiche dal repository originale nel tuo branch principale (main)
# DA EVITARE
# git merge upstream/main

# Pusha le modifiche sul tuo fork su GitHub
git push origin main

git remote -v
