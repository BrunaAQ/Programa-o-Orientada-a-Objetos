# -*- coding: utf-8 -*-
"""
Created on Tue Jan  5 19:54:57 2021

@author: Bruna Aparecida
"""

# Criação de classe Computador:
## Atributos da nossa classe: Marca, Memoria Ram, Placa de vídeo
class Computador:
    # Método construtor:
    def __init__(self, marca, memoria_ram, placa_de_video):
        self.marca = marca
        self.memoria_ram = memoria_ram
        self.placa_de_video = placa_de_video
    
    # Métodos para Ligar, Desligar, Exibir Configurações
    def Ligar(self):
       print('Olá, estou ligado e aguardando instruções do usuário!') 
       
    def Desligar(self):
        print('Sistema desligado =(')

    def ExibirInformacoesDesteComputador(self):
        print('Marca:', self.marca, ', Memória RAM:', self.memoria_ram, ', Placa de vídeo:', self.placa_de_video)
        

## Criação da instância da classe computador - passar a classe para uma variável (objeto):
computador1 = Computador('Blue Acer', '8gb', 'Nvidia')
## Acessar os métodos:
computador1.Ligar()
computador1.Desligar()
computador1.ExibirInformacoesDesteComputador()
'''
computador2 = Computador('Samsumg', '4gb', 'ATM')
computador3 = Computador('LG', '8gb', 'GeForce')
### Acessar os atributos da classe através da instância:
print(computador1.marca, computador1.memoria_ram, computador1.placa_de_video)
print(computador2.marca, computador2.memoria_ram, computador2.placa_de_video)
print(computador3.marca, computador3.memoria_ram, computador3.placa_de_video)
'''





