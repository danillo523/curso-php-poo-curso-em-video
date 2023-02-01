
# Anotações e códigos do curso de POO PHP

Repositório destinado para anotação e códigos dos estudos do curso de PHP POO - Canal Curso em vídeo

https://www.youtube.com/watch?v=KlIL63MeyMY&list=PLHz_AreHm4dmGuLII3tsvryMMD7VgcT7x




# Anotações

  A **Programação Orientada a Objetos**,  criada pelo por  **Alan Kay**  é um paradigma de programação em que tem o objetivo de tornar a programação mais próxima do mundo em que vivemos utilizando **Objetos** tenso suas **Características**, **Comportamentos** e **Estados**

Características = Atributos
Comportamentos = Métodos
Estado = Estado
 

## Vantagens da programação Orientada a objeto 

 - **Confiável**: quando uma parte é alterada outra não é afetada
 - **Oportuno**: pode ser desenvolvido em paralelo pois de divide tudo em partes
 - **Manutenível** (Ajustável) : ao atualizar uma parte todas a partes que usarem o objeto são beneficiadas
 - **Extensível**: é possível estender o software para ter mais funcionalidades e se permanecer útil
 - **Reutilizável**:  podemos utilizar o mesmo objeto em varias partes do sistema
 - **Natural**:  ao programa orientado a objeto nos preocupamos mais com as funcionalidades do que detalhes de implementação, assim tornando o programas mais fácil de entender

## Objeto 

Objeto é algo material ou abstrato , sendo possível se perceber pelos sentidos e descrita por  **Características**, **Comportamentos** e **Estado atual**

## Visibilidade

 - **Publico**: acesso dentro e fora da classe.
 - **Privado**: não é acessível fora da classe
 - **Protegido** acessível dentro da classe e classes filhas (subclasses)

## Métodos especiais

- **Construtor**: é o primeiro método executado quando um objeto partir da classe é criado  
- **Getter** e **Setter**: são encapsuladores de atributos privados de uma classe, sendo possível "pegar" e "definir" um valor ao atributo privado através de getters e setter, mas são considerados antipadrões. 

## Pilares da Orientação a Objetos

-   **Encapsulamento** : é proteger os atributos e ou métodos de acesso direto, assim impedindo efeitos indesejados nas nossas classes e programas.
-   **Herança**:  permite criar um a nova classe baseada em uma classe existente, assim hierarquicamente herdando atributos e métodos, de acordo com a visibilidade. 
-   **Polimorfismo**: é um conceito que complementa  herança e sobrecarga, no polimorfismo um objeto pode responder de formas diferentes de acordo com o que é recebido,

## Herança

A herança em orientação a objeto será aplicada tanto para as características quanto para os comportamentos, ou seja atributos e métodos,
Sendo possível ter herança sem encapsulamento e vice-versa 

em herança temos os seguintes termos 

**Generalização**: são classes mais genéricas com similaridades, por exemplo uma classe Veiculo , sendo também chamado de superClasse 

**Especialização**:  São classes mais refinadas , usando como exemplo classes como Moto ou Carro, sendo uma classe mais especifica em relação a classe Veiculo.

### tipos de herança

Existem heranças por **implementação** e herança **por diferença**

sendo que a herança por **implementação** herda tudo da classe mãe, mas não adiciona nada.

herança por **diferença** adiciona novos elementos.

## Abstrato e final

Uma **classe abstrata** não pode ser instanciada, só pode ser progenitora, é o que normalmente super classes são.

um **método abstrato** são métodos em que são declarados, mas não implementados na progenitora, são métodos de interfaces  e classes abstratas

uma **classe final** é uma classe em que não pode ser herdada por outra classe

um **método final** não pode ser  sobrescrito pelas suas sub classes.

## Polimorfismo

 É o conceito de polimorfismo é que duas ou mais classes podem derivar de uma super classe porem podendo invocar métodos que tem a mesma assinatura mas com comportamentos diferentes.
 
 sendo possível ter dois tipos de polimorfismo

**Sobreposição e Sobrecarga**

**Sobreposição**: é quando substituímos um método de uma superclasse na sua subclasse, usando a mesma assinatura

**Sobrecarga**:  é utilizado o mesmo nome do método mas com como assinaturas diferentes.
 
**NA LINGUAGEM PHP NÃO TEMOS SOBRECARGA** 

