# hack
So what exactly is the hhvm hack language then?

To run, install HHVM (which includes Hack) - instructions somewhere here: http://hacklang.org/

### Running it

Once everything is ready, navigate to this folder and first run the HHVM server with:

`hhvm -m server -p 8080`

...and in another window

`hh-client` to run typechecking

On Ubuntu you can use `watch hh-client` to ensure the typechecker continuously runs, not 100% what the deal is with OSX.

### Thoughts so far:

HHVM crashes when a string-accepting function is used on a function requiring an int type - but if this function is used in a Box/map type way as per the code the typechecker does not directly infer this issue.
