module.exports={
    estPair: function(number){
        if(Number.isInteger(number)){
            return number%2==0;
        } else {
            throw("Le parametre n'est pas un entier")
        }
    },

    concateneBonjour: function(phrase){
        if(String.isString(phrase)){
            return 'Bonjour '.phrase;
        } else {
            throw("Le parametre n'est pas une chaîne de caractères");
        }
    }
}