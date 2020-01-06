SELECT docteur.prenom,docteur.nom,secteur.nom_secteur,secrecteur.prenom,secrecteur.nom FROM docteur INNER JOIN bloc 
on docteur.id = bloc.id_docteur
 INNER JOIN secteur on secteur.id=bloc.id_secteur INNER JOIN service on secteur.id=service.idsecteur 
iNNER JOIN secrecteur on secrecteur.id=service.idsecreteur;

//pour afficher les nom des docteur dune secteur

SELECT docteur.prenom,docteur.nom,secteur.nom_secteur,secrecteur.prenom,secrecteur.nom FROM docteur 
INNER JOIN bloc on docteur.id = bloc.id_docteur INNER JOIN secteur on secteur.id=bloc.id_secteur 
INNER JOIN service on secteur.id=service.idsecteur iNNER JOIN secrecteur on secrecteur.id=service.idsecreteur 
WHERE secteur.nom_secteur="gastro";

SELECT patients.prenom,patients.nom,patients.symptone,docteur.prenom,docteur.nom,secteur.nom_secteur,secrecteur.prenom,secrecteur.prenom,secrecteur.nom FROM docteur INNER JOIN bloc on docteur.id = bloc.id_docteur INNER JOIN secteur on secteur.id=bloc.id_secteur INNER JOIN service on secteur.id=service.idsecteur iNNER JOIN secrecteur on secrecteur.id=service.idsecreteur 
INNER JOIN traitement on traitement.id_docteur=docteur.id
INNER JOIN patients on patients.id=traitement.id_patient
WHERE secteur.nom_secteur="gastro"

INSERT INTO `patients` (`id`, `pat_prenom`, `pat_nom`, `pat_age`, `pat_adresse`, `pat_phone`, `pat_image`, `pat_email`, `pat_symptone`) 
VALUES (NULL, 'malick', 'sow', '26', 'tambacouda', '701254232', 'image6', 'malick.sow@gmail.com', 'mal au ventre');


INSERT INTO `traitement` (`id_docteur`, `id_patient`) VALUES ('1', '9');

INSERT INTO `bloc` (`id_secteur`, `id_docteur`) VALUES ('1', '8');