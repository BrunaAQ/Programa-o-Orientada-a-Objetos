# -*- coding: utf-8 -*-
"""
Created on Tue Jan  5 20:38:39 2021

@author: Bruna Aparecida
"""



'''
-------------------------------------------****** DESAFIO ******----------------------------------------------------
Criar a classe "Carro" com no mínimo três atributos e três métodos
-------------------------------------------****** DESAFIO ******----------------------------------------------------
'''

# Definição da classe:
class Carro:
    # Definição do método construtor:
    def __init__(self, marca, modelo, cor):
        self.marca = marca
        self.modelo = modelo
        self.cor = cor
    
    # Definição dos métodos:
        
    def Vistoria(self):
        print("Carro ainda não vistoriado após a compra")
    
    def TrocaDeOleo(self):
        print("última troca de óleo: 6 meses atrás")
        
    def ExibirInformacoesDoVeiculo(self):
        print("Marca: ", self.marca, ", Modelo: ", self.modelo, ", Cor: ", self.cor)
    

# Criação da instância da classe Carro:
carro = Carro('Fiat', 'Punto', 'Cinza')
# Acesso aos atributos da classe através da instância (objeto/variável de atribuição)
print(carro.marca)
# Acesso aos métodos da classe:
carro.Vistoria()
carro.TrocaDeOleo()
carro.ExibirInformacoesDoVeiculo()
