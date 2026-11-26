INSERT INTO plano (nome, valor, duracao, descricao)
VALUES
('Básico', 59.90, 30, 'Acesso à musculação e equipamentos da academia.'),
('Intermediário', 89.90, 30, 'Acesso à musculação e aulas de esportes.'),
('Premium', 129.90, 30, 'Acesso completo à academia, musculação e todas as modalidades esportivas.');



INSERT INTO usuario (idplano, nome, email, senha, telefone, foto) VALUES
(1, 'João Silva', 'joao@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9lY5g3V5w4v5g8l6v6v6v6', '62999999901', 'joao.jpg'),
(1, 'Maria Souza', 'maria@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9lY5g3V5w4v5g8l6v6v6v6', '62999999902', 'maria.jpg'),
(2, 'Pedro Santos', 'pedro@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9lY5g3V5w4v5g8l6v6v6v6', '62999999903', 'pedro.jpg');