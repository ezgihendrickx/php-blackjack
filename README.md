
# `php-blackjack`

## "Language: PHP"

---

## Learning objectives :computer:

- A first dive into OOP (object oriented programming)
This is the repository for the exercise: https://github.com/becodeorg/gnt-yu-3-21/tree/master/3.The-Mountain/4.OOP-blackjack


## The Mission

Let's make a game in PHP: Blackjack! To keep the code structured we are going to use classes and objects.

## Getters

You will see you will create a lot of functions that start with "get" to access a property in a class. Why not just make the property public?

This kind of function is called a Getter and it encapsulates the fields of a class by making them accessible only through its public methods and keep the values themselves private.

Setting the property as public is ALWAYS considered a very bad idea because you will lose all control of which value is entered there. Any validation that was provided in your getter function could be avoided if you make the property public.

###### TL;DR: Never use public properties, make getters!

---

## Tips :wrench:

+ Be sure to check the pre made classes and the example.php file. This file shows how you can easily get some graphical presentation for the cards to spice up your game!

## Author :black_nib:
:star: Powered by Ezgi
