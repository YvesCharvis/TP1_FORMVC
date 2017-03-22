#PDO - TP
Pour tous les TP, il faudra respecter ces rÃ¨gles :
- Respecter le modÃ¨le MVC
- Nommer ses variables, fonctions, bases, tables et champs en anglais  
- Soigner son CSS
- Avoir un HTML valide
- Chaque TP doit avoir son propore VHOST
- Utiliser des classes serait un plus
- Mettre des commentaires utiles




##TP 1
CrÃ©er un base avec une table permettant d'enregistrer un utilisateur. Un utilisateur est dÃ©fini comme tel :
- Nom - 50 caractÃ¨res max
- PrÃ©nom - 50 caractÃ¨res max
- Date de naissance - Date
- Adresse - Texte
- Code Postal - 5 caractÃ¨res max
- NumÃ©ro de tÃ©lÃ©phone - 10 caractÃ¨res max
- Service - entier

CrÃ©er une table Service :
- Nom du service - 50 caractÃ¨res max
- Description - 100 caractÃ¨res max

Remplir la table Service avec ces informations :

Nom du service   |   Description
------           |    ---
Maintenance      |   Les spÃ©cialistes du Hardware
Web Developer    |   Pour eux tout est code
Web Designer     |   Y a que le CSS dans la vie
RefÃ©renceur      |   Regarde les Serps Google du matin au soir et du soir au matin

Faire une page index permettant de lister les utilisateurs en affichant ces donnÃ©es :
- Son nom et son prÃ©nom
- Son Ã¢ge
- Son adresse complÃ¨te
- Son numÃ©ro de tÃ©lÃ©phone
- Son service

Sur cette page on doit pouvoir filtrer les services via une liste dÃ©roulante et donc n'afficher que ceux choisi.  
On doit aussi pourvoir supprimer un utilisateur via un bouton.  

Faire une autre page permettant d'ajouter un utilisateur. On doit s'assurer que les donnÃ©es saisies par l'utilisateur sont celle attendues.  
**Attention au piratage !!**