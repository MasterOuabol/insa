

var assert = require('assert');
var estPaire = require('../js/calcul');

describe('estPair', function(){
    it('verifie la parite pour un nombre impair', function(){
        assert.equal(estPaire.estPair(1),false);
    });
});

describe('estPair', function(){
    it('verifie la parite pour un nombre pair', function(){
        assert.equal(estPaire.estPair(2),true);
    });
});

describe('estPair', function(){
    it('verifie la parite pour un nombre impair négatif', function(){
        assert.equal(estPaire.estPair(-1),false);
    });
});

describe('estPair', function(){
    it('verifie la parite pour un nombre pair négatif', function(){
        assert.equal(estPaire.estPair(-4),true);
    });
});

describe('estPair', function(){
    it('verifie la parite pour un grand nombre impair ', function(){
        assert.equal(estPaire.estPair(55),false);
    });
});

describe('estPair', function(){
    it('verifie la parite pour un grand nombre pair', function(){
        assert.equal(estPaire.estPair(4032),true);
    });
});

describe('estPair', function(){
    it('verifie la parite pour un String qui devrait être pair', function(){
        assert.equal(estPaire.estPair("2"),true);
    });
});

var estConcatene = require('../js/calcul');

describe('estConcatene', function(){
    it('verifie la concatenation entre bonjour et Matthieu', function(){
        assert.equal(estConcatene.concateneBonjour("Matthieu"),"Bonjour Matthieu");
    });
});


