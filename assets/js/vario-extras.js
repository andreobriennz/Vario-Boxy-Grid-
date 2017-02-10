// Extra things either as a reference or for later development

// function UseNewElement(name) {
//     switch(name) {
//         case 'data-tag':
//             alert();
//             break;
//     }
// };

    // reference //

function Constructor(Value1, Value2, Method1, Method2) {
    this.Value1 = Value1;
    this.Value2 = Value2;
    this.Method1 = function() {
        return "Value1:" + this.Value1 + ". Value2: " + this.Value2;
    }
    this.Method2 = function() {
        alert(this.Value1);
    }
};
// var Item1 = new Constructor('Value 1', 'Value 2');
// document.write(Item1.Method1());

function ChangeProperty(Object, NewProperty) {
    Person.Value1 = NewProperty;
}
// ChangeProperty(Item1, 'Value 1.2');

Constructor.prototype.Value3 = 'Value 3';

function E(Unsafe) {
    return Unsafe
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
};

function NewVariable(Name, Value) {
    window[Name] = Value;
};

// uses aspects of imperitive and functional
// test get element by type



    // for later //

function ApplyCallOrBind() {
    // http://javascriptissexy.com/javascript-apply-call-and-bind-methods-are-essential-for-javascript-professionals/
};

function MakeCallbackFunction() {
    // http://javascriptissexy.com/understand-javascript-callback-functions-and-use-them/
    // https://stackoverflow.com/questions/9596276/how-to-explain-callbacks-in-plain-english-how-are-they-different-from-calling-o
    // calls back when finished task
};


