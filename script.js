let array = [
    'Nguyễn Nhựt Hào - 19521478',
    'Nguyễn Đăng Định - 19521362',
    'Phạm Kim Chiến - 19521362',
    'Trần Phan Hải Đăng - 19521319',
    'Trần Hữu Tình - 19520299',
    'Nguyễn Hữu Tâm - 19520255'
]

let autoBox = document.querySelector('.returnkq')

let tencanxoa = document.querySelector('#tencanxoa')

tencanxoa.onkeyup = (e) => {
    let check = e.target.value
    let dataArr = []
    if (check) {
        dataArr = array.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(check.toLocaleLowerCase())
        })
        dataArr = dataArr.map((data)=> {
            return data = '<li>' + data + '</li>'
        })
        showRecmd (dataArr)
        let liItem = autoBox.querySelectorAll('li')
        for (let i = 0; i < liItem.length; i++) {
            liItem[i].addEventListener('click', function() {
                tencanxoa.value = liItem[i].innerHTML
                autoBox.style.display = "none"
            })
        }
    }
}

function showRecmd (list) {
    let listData
    if (!list.length) {
        listData = '<li>\"' + tencanxoa.value + '\" khong tim thay</li>'
    }
    else {
        listData = list.join('')
    }
    autoBox.innerHTML = listData
}

tencanxoa.onfocus = () => {
    autoBox.style.display = "block"
}

tencanxoa.onblur = () => {
    autoBox.style.display = "none"
}