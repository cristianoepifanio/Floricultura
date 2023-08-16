# Importando bibliotecas utilizadas no jogo
import pygame  # biblioteca do jogo
import random  # gerar posições aleatórias
import sys  # encerrar
from pygame.locals import *

pygame.init()

# Definindo resolução e nome da janela
largura_tela = 1280
altura_tela = 720
screen = pygame.display.set_mode((largura_tela, altura_tela))
pygame.display.set_caption("FLORICULTURA TERESINHA GAME")


# Definindo game over
game_over = False

# Definindo score
score = 0

# Carregar a imagem da tela de start
start_screen_image = pygame.image.load("img/start.png")

# Música de fundo "-1" pra ficar em loop infinito
pygame.mixer.music.set_volume(0.5)
musica_de_fundo = pygame.mixer.music.load("music/musica_fundo.mp3")

# Som de colisão
som_colisao = pygame.mixer.Sound("music/coin.wav")
pygame.mixer.music.play(-1)

# Definindo config Score
def update_score():
    text = font.render("Score: " + str(score), True, (255, 255, 255))
    screen.blit(text, (10, 10))


# Definindo a tela Start
def start_screen():
    while True:
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                pygame.quit()
                sys.exit()

            # Verificar se a tecla "Enter" foi pressionada para começar o jogo
            if event.type == pygame.KEYDOWN and event.key == pygame.K_RETURN:
                return  # Saia do loop e inicie o jogo

        # Desenhar a tela de início
        screen.blit(start_screen_image, (0, 0))
        pygame.display.flip()


# Chamar a tela de start
start_screen()


def on_grid_random():
    x = random.randint(0, 590)
    y = random.randint(0, 590)
    return (x // 10 * 10, y // 10 * 10)


def collision(c1, c2):
    return (c1[0] == c2[0]) and (c1[1] == c2[1])


font = pygame.font.Font(None, 36)


def show_score(score):
    text = font.render("Score: " + str(score), True, BLACK)
    screen.blit(text, (10, 10))


def game_over_screen():
    # Carregar a imagem da tela de Game Over
    game_over_image = pygame.image.load("img/game_over.png")

    while True:
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                pygame.quit()
                sys.exit()

            # Verificar se a tecla "Enter" foi pressionada para reiniciar o jogo
            if event.type == pygame.KEYDOWN and event.key == pygame.K_RETURN:
                restart_game()  # Chamar a função para reiniciar o jogo

        # Desenhar a tela de Game Over
        screen.blit(game_over_image, (0, 0))
        pygame.display.flip()


def restart_game():
    global snake, apple_pos, my_direction, score, game_over

    # Configurações iniciais do jogo
    score = 0
    snake = [(200, 200), (210, 200), (220, 200)]
    apple_pos = on_grid_random()
    my_direction = LEFT
    game_over = False


# Definindo direções
UP = 0
RIGHT = 1
DOWN = 2
LEFT = 3

score = 0

pygame.init()
screen = pygame.display.set_mode((1280, 720))
pygame.display.set_caption('Snake')

# imagem de fundo da aplicação
fundo = pygame.image.load("img/01.png")

# Definindo a velocidade da cobra
snake_speed = 10  # pixels por movimento
clock = pygame.time.Clock()

# config snake
snake = [(200, 200), (210, 200), (220, 200)]
snake_skin = pygame.Surface((10, 10))
snake_skin.fill((0, 0, 0))

# config apple
apple_pos = on_grid_random()
apple = pygame.Surface((10, 10))
apple.fill((247, 0, 0))

my_direction = LEFT

# p definindo as binds
while True:
    clock.tick(snake_speed)  # Limita a velocidade da cobra

    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            pygame.quit()
            sys.exit()

        if event.type == pygame.KEYDOWN:
            if event.key == pygame.K_UP:
                my_direction = UP
            if event.key == pygame.K_DOWN:
                my_direction = DOWN
            if event.key == pygame.K_LEFT:
                my_direction = LEFT
            if event.key == pygame.K_RIGHT:
                my_direction = RIGHT
            if event.key == pygame.K_r:
                restart_game()
            if event.key == pygame.K_SPACE:
                if game_over:
                    restart_game()

    # game over
    if (
        snake[0][0] < 0
        or snake[0][0] >= largura_tela
        or snake[0][1] < 0
        or snake[0][1] >= altura_tela
    ):
        game_over = True

    # game over apply
    if game_over:
        game_over_screen()

    # Colisão com a maçã
    if collision(snake[0], apple_pos):
        score += 1
        apple_pos = on_grid_random()
        snake.append((0, 0))
        som_colisao.play()

    # Crescer após colidir com a maçã
    for i in range(len(snake) - 1, 0, -1):
        snake[i] = (snake[i - 1][0], snake[i - 1][1])

    if my_direction == UP:
        snake[0] = (snake[0][0], snake[0][1] - 10)
    if my_direction == DOWN:
        snake[0] = (snake[0][0], snake[0][1] + 10)
    if my_direction == RIGHT:
        snake[0] = (snake[0][0] + 10, snake[0][1])
    if my_direction == LEFT:
        snake[0] = (snake[0][0] - 10, snake[0][1])

    # Colisão com a parede
    if (
        snake[0][0] < 0
        or snake[0][0] >= largura_tela
        or snake[0][1] < 0
        or snake[0][1] >= altura_tela
    ):
        game_over = True

    # Atualizando telas
    screen.blit(fundo, (0, 0))
    screen.blit(apple, apple_pos)
    for pos in snake:
        screen.blit(snake_skin, pos)

    update_score()

    pygame.display.update()
    pygame.time.delay(15)

pygame.quit()
# Importando bibliotecas utilizadas no jogo
import pygame  # biblioteca do jogo
import random  # gerar posições aleatórias
import sys  # encerrar
from pygame.locals import *

pygame.init()

# Definindo resolução e nome da janela
largura_tela = 1280
altura_tela = 720
screen = pygame.display.set_mode((largura_tela, altura_tela))
pygame.display.set_caption("FLORICULTURA TERESINHA GAME")


# Definindo game over
game_over = False

# Definindo score
score = 0

# Carregar a imagem da tela de start
start_screen_image = pygame.image.load("img/start.png")

# Música de fundo "-1" pra ficar em loop infinito
pygame.mixer.music.set_volume(0.5)
musica_de_fundo = pygame.mixer.music.load("music/musica_fundo.mp3")

# Som de colisão
som_colisao = pygame.mixer.Sound("music/coin.wav")
pygame.mixer.music.play(-1)

# Definindo config Score
def update_score():
    text = font.render("Score: " + str(score), True, (255, 255, 255))
    screen.blit(text, (10, 10))


# Definindo a tela Start
def start_screen():
    while True:
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                pygame.quit()
                sys.exit()

            # Verificar se a tecla "Enter" foi pressionada para começar o jogo
            if event.type == pygame.KEYDOWN and event.key == pygame.K_RETURN:
                return  # Saia do loop e inicie o jogo

        # Desenhar a tela de início
        screen.blit(start_screen_image, (0, 0))
        pygame.display.flip()


# Chamar a tela de start
start_screen()


def on_grid_random():
    x = random.randint(0, 590)
    y = random.randint(0, 590)
    return (x // 10 * 10, y // 10 * 10)


def collision(c1, c2):
    return (c1[0] == c2[0]) and (c1[1] == c2[1])


font = pygame.font.Font(None, 36)


def show_score(score):
    text = font.render("Score: " + str(score), True, BLACK)
    screen.blit(text, (10, 10))


def game_over_screen():
    # Carregar a imagem da tela de Game Over
    game_over_image = pygame.image.load("img/game_over.png")

    while True:
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                pygame.quit()
                sys.exit()

            # Verificar se a tecla "Enter" foi pressionada para reiniciar o jogo
            if event.type == pygame.KEYDOWN and event.key == pygame.K_RETURN:
                restart_game()  # Chamar a função para reiniciar o jogo

# Desenhar a tela de Game Over
        screen.blit(game_over_image, (0, 0))
        pygame.display.flip()

        # Exibir o score
        score_text = font.render("Score: " + str(score), True, (255, 255, 255))
        screen.blit(score_text, (largura_tela // 2 - score_text.get_width() // 2, altura_tela // 2))

def restart_game():
    global snake, apple_pos, my_direction, score, game_over

# Configurações iniciais do jogo
    score = 0
    snake = [(200, 200), (210, 200), (220, 200)]
    apple_pos = on_grid_random()
    my_direction = LEFT
    game_over = False


# Definindo direções
UP = 0
RIGHT = 1
DOWN = 2
LEFT = 3

score = 0

pygame.init()
screen = pygame.display.set_mode((1280, 720))
pygame.display.set_caption('Snake')

# imagem de fundo da aplicação
fundo = pygame.image.load("img/01.png")

# Definindo a velocidade da cobra
snake_speed = 10  # pixels por movimento
clock = pygame.time.Clock()

# config snake
snake = [(200, 200), (210, 200), (220, 200)]
snake_skin = pygame.Surface((10, 10))
snake_skin.fill((0, 0, 0))

# config apple
apple_pos = on_grid_random()
apple = pygame.Surface((10, 10))
apple.fill((247, 0, 0))

my_direction = LEFT

# p definindo as binds
while True:
    clock.tick(snake_speed)  # Limita a velocidade da cobra

    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            pygame.quit()
            sys.exit()

        if event.type == pygame.KEYDOWN:
            if event.key == pygame.K_UP:
                my_direction = UP
            if event.key == pygame.K_DOWN:
                my_direction = DOWN
            if event.key == pygame.K_LEFT:
                my_direction = LEFT
            if event.key == pygame.K_RIGHT:
                my_direction = RIGHT
            if event.key == pygame.K_r:
                restart_game()
            if event.key == pygame.K_SPACE:
                if game_over:
                    restart_game()

    # game over
    if (
        snake[0][0] < 0
        or snake[0][0] >= largura_tela
        or snake[0][1] < 0
        or snake[0][1] >= altura_tela
    ):
        game_over = True

    # game over apply
    if game_over:
        game_over_screen()

    # Colisão com a maçã
    if collision(snake[0], apple_pos):
        score += 1
        apple_pos = on_grid_random()
        snake.append((0, 0))
        som_colisao.play()

    # Crescer após colidir com a maçã
    for i in range(len(snake) - 1, 0, -1):
        snake[i] = (snake[i - 1][0], snake[i - 1][1])

    if my_direction == UP:
        snake[0] = (snake[0][0], snake[0][1] - 10)
    if my_direction == DOWN:
        snake[0] = (snake[0][0], snake[0][1] + 10)
    if my_direction == RIGHT:
        snake[0] = (snake[0][0] + 10, snake[0][1])
    if my_direction == LEFT:
        snake[0] = (snake[0][0] - 10, snake[0][1])

    # Colisão com a parede
    if (
        snake[0][0] < 0
        or snake[0][0] >= largura_tela
        or snake[0][1] < 0
        or snake[0][1] >= altura_tela
    ):
        game_over = True

    # Atualizando telas
    screen.blit(fundo, (0, 0))
    screen.blit(apple, apple_pos)
    for pos in snake:
        screen.blit(snake_skin, pos)

    update_score()

    pygame.display.update()
    pygame.time.delay(15)

pygame.quit()
