function reloaderSwal(args) {

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 10000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.hideLoading())
            toast.addEventListener('mouseleave',  Swal.showLoading())
        }
    })

    Toast.fire({
        title: args,
        color: '#0a2163',
        loaderColor: '#0a2163'
    })
}

function click_listGroupItemAction(itemAction){
    itemAction = itemAction.target
    const listItemAction = document.getElementById("active")

    if (listItemAction) {
        listItemAction.setAttribute('class', 'list-group-item list-group-item-action');
        listItemAction.removeAttribute("id")
        listItemAction.removeAttribute("aria-current")
    }

    itemAction.setAttribute('class', 'list-group-item list-group-item-action active');
    itemAction.setAttribute('aria-current', 'true');
    itemAction.setAttribute('id', 'active');
    reloaderSwal(itemAction.textContent)

}

(function() {
    const listGroupItemAction = document.getElementsByClassName("list-group-item-action")
    for (let index = 0, length = listGroupItemAction.length; index < length; index += 1) {
        const element = listGroupItemAction[index];
        element.addEventListener("click", click_listGroupItemAction)
    }
}) ();