Parsley.addValidator("restrictedCity",{requirementType:"string",validateString:function(e,a){return""===(e=(e||"").trim())||e.toLowerCase()===a.toLowerCase()},messages:{en:'You have to live in <a href="https://www.google.com/maps/place/Jakarta">Jakarta</a>.'}});