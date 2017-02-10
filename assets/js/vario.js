    // Get OR Update Content //
function GetContent(Input) {
    window.Content = document.getElementById(Input).value;
};

function UpdateContent(Input, Output) {
    document.getElementById(Output).innerHTML = Input;
};



    // Get OR Update Attribute //
function GetAttribute(Input, Attribute) {
    var Input = document.getElementById(Input).getAttribute(Attribute);
    window.AttributeValue = Input;
};

function UpdateAttribute(Input, Output, Attribute) {
    document.getElementById(Output).setAttribute(Attribute, Input);
};



    // Add / Delete Content //
function CreateNode(ParentId, NewTagType, Text, AttributeType, AttributeName) {
    var NewTagType = document.createElement(NewTagType);
    var Text = document.createTextNode(Text);
    NewTagType.appendChild(Text);
    var element = document.getElementById(ParentId);
    g = element.appendChild(NewTagType);
    g.setAttribute(AttributeType, AttributeName);
};

function DeleteElement(ElementId) {
    var Element = document.getElementById(ElementId);
    Element.outerHTML = "";
    delete Element;
};

function GetElementByType(Name, Type, Function) {
    if (Type === 'class' || Type === undefined) {
        var elements = document.getElementsByClassName(Name);
        for (var i = 0; i < elements.length; i++) {
            Function(elements[i]);
        }
    } else if (Type === 'tag') {
        var elements = document.getElementsByTagName(Name);
        for (var i = 0; i < elements.length; i++) {
            Function(elements[i]);
        }
    }
};



    // AJAX / JSON //
function GetFromJson(JsonName, Output, JsonField1, JsonField2, JsonField3) {
    var Json = JSON.parse(JsonName);
    if (JsonField2 === undefined) {
        window.FromJson = Json[JsonField1];
    } else if (JsonField3 === undefined) {
        window.FromJson = Json[JsonField1][JsonField2];
    } else {
        window.FromJson = Json[JsonField1][JsonField2][JsonField3];
    }
};

function GetFromJson2W(JsonName, Output, JsonField1, JsonField2, JsonField3) {
    GetFromJson(JsonName, Output, JsonField1, JsonField2, JsonField3);
    document.getElementById(Output).innerHTML = FromJson;
};

function AjaxGet(Name, Url) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', Url);
    xhr.onload = function() {
        if (xhr.status === 200) { 
            window[Name] = xhr.responseText;
        } else {
            alert('Request failed.  Returned status of ' + xhr.status);
        }
    };
    xhr.send();
};



    // Get AND Update Content / Attribute //
function UpdateContent2W(Input, Output) {
    var Input = document.getElementById(Input).value;
    document.getElementById(Output).innerHTML = Input;
};

function UpdateAttribute2W(Input, Output, Attribute) {
    var Input = document.getElementById(Input).value;
    document.getElementById(Output).setAttribute(Attribute, Input);
};

function NewTask(ParentId, InputId, NewTagType, AttributeType, AttributeName) {
    GetContent(InputId);
    var text = Content;
    if (AttributeType === undefined) {
        CreateNode(ParentId, NewTagType, text);
    } else {
        CreateNode(ParentId, NewTagType, text, AttributeType, AttributeName);
    }
};

function AttributeCount2W(Input, InputAttribute, Output, Add, Limit) {
    GetAttribute(Input, InputAttribute);
    AttributeValue = Number(AttributeValue);
    if (Limit === undefined || (Add > 0 && AttributeValue < Limit) || (Add < 0 && AttributeValue > Limit)) {
        AttributeValue = AttributeValue + Add;
    } else {
        AttributeValue = Limit;
    }
    UpdateAttribute(AttributeValue, Input, InputAttribute);
    UpdateAttribute(AttributeValue, Output, 'href');
};



    // Create Unique Element Tag //
function CreateNewElement(Name, Id) {
    document.createElement(Name);
    var Todo = document.getElementsByTagName(Name);

    if (Id === undefined) {
        for (var i = 0; i < Todo.length; i++) {
            Todo[i].addEventListener("click", function(){
                UseNewElement(Name);
            });
        }
    } else {
        Todo[Id].addEventListener("click", function(){
            UseNewElement(Name);
        });     
    }
};


    // jQuery-like //
function HideOrShow(Id, Display, Variable) {
    if (Variable === undefined) {
        document.getElementById(Id).style.display = Display;
    } else {
        window[Variable] = Variable;
        Variable.style.display = Display;
    }
    
};

function ToggleClass(Id, Class) {
    var Id = document.getElementById(Id);
    Id.classList.toggle('hide');
};

function FadeIn(Id) {
    document.getElementById(Id).setAttribute('class', 'FadeIn');
};

function FadeOut(Id) {
    document.getElementById(Id).setAttribute('class', 'FadeOut');
};



    // Smooth Scroll
var Body = document.body;
function ScrollTo(To, Duration) {
    Element = Body;
    if (Duration <= 0) return;
    var Difference = To - Element.scrollTop;
    var PerTick = Difference / Duration * 10;

    setTimeout(function() {
        Element.scrollTop = Element.scrollTop + PerTick;
        if (Element.scrollTop === To) return;
        ScrollTo(To, Duration - 10);
    }, 10);
};



    // Lazy Load //
function LazyLoad(Tag, Url) {
    if (Tag != undefined) {
        var Element = document.createElement(Tag);
        Element.src = Url;
        document.body.appendChild(Element);
    }
};





