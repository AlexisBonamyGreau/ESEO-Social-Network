INSERT INTO AnneeScolaire VALUES
(1, 'E1'),
(2, 'E2'),
(3, 'E3e'),
(4, 'E4e'),
(5, 'E5e');

INSERT INTO Etudiant VALUES
(1, 'BONAMY', 'Alexis', 'photo_bonamyal.jpg', STR_TO_DATE('12/05/2022','%d/%m/%Y'), STR_TO_DATE('12/05/2022','%d/%m/%Y'), 3, null),
(2, 'CARDOT', 'Clement', 'photo_cardotcl.jpg', STR_TO_DATE('12/05/2022','%d/%m/%Y'), STR_TO_DATE('12/05/2022','%d/%m/%Y'), 3, null),
(3, 'BONAMY', 'Maxence', 'photo_bonamyma.jpg', STR_TO_DATE('12/05/2022','%d/%m/%Y'), STR_TO_DATE('12/05/2022','%d/%m/%Y'), 2, null),
(4, 'BOURIGAULT', 'Eurydice', 'photo_bourigaulteu.jpg', STR_TO_DATE('12/05/2022','%d/%m/%Y'), STR_TO_DATE('12/05/2022','%d/%m/%Y'), 3, null),
(5, 'BONAMY', 'Camille', 'photo_bonamyca.jpg', STR_TO_DATE('12/05/2022','%d/%m/%Y'), STR_TO_DATE('12/05/2022','%d/%m/%Y'), 4, null),
(6, 'HERVE', 'Alexis', 'photo_herveal.jpg', STR_TO_DATE('12/05/2022','%d/%m/%Y'), STR_TO_DATE('12/05/2022','%d/%m/%Y'), 5, null),
(7, 'CALPETARD', 'Alexandre', 'photo_calpetardal.jpg', STR_TO_DATE('12/05/2022','%d/%m/%Y'), STR_TO_DATE('12/05/2022','%d/%m/%Y'), 3, null);

INSERT INTO Article VALUES
(1, 'azertyomg', null, STR_TO_DATE('12/05/2022','%d/%m/%Y'), 'public', 1),
(2, 'info_seio', null, STR_TO_DATE('12/05/2022','%d/%m/%Y'), 'public', 4),
(3, 'test', null, STR_TO_DATE('12/05/2022','%d/%m/%Y'), 'prive', 1),
(4, 'centrale', null, STR_TO_DATE('12/05/2022','%d/%m/%Y'), 'public', 3);

INSERT INTO Amis VALUES
(5, 1, STR_TO_DATE('12/05/2022','%d/%m/%Y'),'refuse'),
(2, 1, STR_TO_DATE('12/05/2022','%d/%m/%Y'), 'en attente'),
(4, 2, STR_TO_DATE('12/05/2022','%d/%m/%Y'), 'en attente'),
(5, 3, STR_TO_DATE('12/05/2022','%d/%m/%Y'), 'en attente'),
(1, 4, STR_TO_DATE('12/05/2022','%d/%m/%Y'), 'valide'),
(4, 1, STR_TO_DATE('13/05/2022','%d/%m/%Y'), 'valide'),
(4, 5, STR_TO_DATE('12/05/2022','%d/%m/%Y'), 'valide'),
(5, 4, STR_TO_DATE('13/05/2022','%d/%m/%Y'), 'valide');

INSERT INTO Notification VALUES
(1, 'nv_ami', 'non_lue', 'non_suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 2, 1),
(2, 'nv_ami', 'lue', 'non_suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 4, 2),
(3, 'nv_ami', 'lue', 'suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 5, 3);

INSERT INTO Conversation VALUES
(1, 'I1 A2 (maïs)', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 'le_mat.jpeg');

INSERT INTO Participe VALUES
(1, 1),
(2, 1),
(4, 1);

INSERT INTO Message VALUES
(1, 'Mais trop marrant en fait', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 1, 1),
(2, 'Qlq a le cours de Maths ?', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 4, 1),
(3, 'Yes, bouge pas...', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 2, 1),
(4, 'Merci !', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 4, 1);

INSERT INTO Notification VALUES
(4, 'nv_grp', 'lue', 'suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 1, 1),
(5, 'nv_grp', 'lue', 'suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 1, 2),
(6, 'nv_grp', 'lue', 'suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 1, 4),

(7, 'nv_msg', 'lue', 'suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 1, 2),
(8, 'nv_msg', 'lue', 'suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 1, 4),

(9, 'nv_msg', 'non_lue', 'non_suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 4, 1),
(10, 'nv_msg', 'lue', 'suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 4, 2),

(11, 'nv_msg', 'non_lue', 'non_suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 2, 1),
(12, 'nv_msg', 'lue', 'suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 2, 4),

(13, 'nv_msg', 'non_lue', 'non_suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 4, 1),
(14, 'nv_msg', 'lue', 'non_suppr', STR_TO_DATE('13/05/2022','%d/%m/%Y'), 4, 2);