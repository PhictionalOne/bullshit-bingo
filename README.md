# Bullshit Bingo

This is an offline copy of the Bullshit Bingo game from the [Bullshit Bingo site](https://www.bullshitbingo.net/). Modified by Phi of the FSI to meet the Fachschafts-Needs.

~~Replace the words in the `words.js` file with your own ones. Keep the first and last line!~~
Create ``<topic>.js` files containing the words you want to bingo to. Place them into the sub-directory `sets/`.

Those files should look like this:
```
const words = `

Here comes your own bullshits
Each one goes in a separate line

`;
```

Open the `index.php` in a browser. Every time you refresh the page it will generate a new Bingo card. To use a special `<topic>.js` use the GET-Parameter `?set=<topic>`.
Print it or play it on your laptop. Have fun! :wink:

## The currents sets/topics are:
* words:	(default) Consisting of universal IT Buzzwords
* studientag:	lumped together for the Studientag WS19/20

For further sets/topic request @phi or add them yourself **[here](new-set.php)**

> Play it online **[here for pre-Fork](https://cdn.rawgit.com/domahidizoltan/bullshit-bingo/rawgit/index.html)** with the built-in content.
> Play it online **[here for FSI-Version](https://teri.fsi.uni-tuebingen.de/~gilgamensch/bullshit-bingo)** with the standart `words.js`.
