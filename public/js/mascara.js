const format = (field, event) => {
    if(event.keyCode == 8) return ;

    let key = event.key

    let mask = field.getAttribute("data-mask")
    let value = field.value
    let tamString = value.length

    let keyMask = mask.charAt(tamString)
    if(keyMask == "" || keyMask == null){
        event.preventDefault()
        return ;
    }

    switch(keyMask){
        case '9':
            var regex = new RegExp("\\d")
            if(!regex.test(key)){
                event.preventDefault()
                return ;
            }
            break;
        case 'A':
            var regex = new RegExp("[a-z]", "i")
            if(!regex.test(key)){
                event.preventDefault()
                return ;
            }
            break;
        default :
            field.value = field.value + keyMask;
            format(field, event)
    }
}

document.querySelectorAll("[data-mask]").forEach((field) => {
    field.addEventListener("keydown", (event) => {
        format(field, event)
    })
})