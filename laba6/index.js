function pow (x,n) {
    if (n == 0) {
    return 1; 
    } else {
    return x * pow(x, n - 1)
    }
}

let power_x = document.querySelector('.power_x');
let power_n = document.querySelector('.power_n');
let button_power = document.querySelector('.button_power');
let result_power = document.querySelector('.res_power');

button_power.onclick = function(){
    result_power.innerHTML = pow(power_x.value, power_n.value);
}

function gcd (x, y) {
    if (y == 0)
    return x
else
    return gcd(y, x % y)
}

let a = document.querySelector('.num_a');
let b = document.querySelector('.num_b');
let button_gcd = document.querySelector('.button_gcd');
let result_gcd = document.querySelector('.res_gcd');

button_gcd.onclick = function(){
    result_gcd.innerHTML = gcd(a.value, b.value);
}

function minDigit(x) {
    var str = String(x)
    var number = str.split('');
    let min = Infinity;
    for(let i = 0; i < number.length; i++){
        if (number[i] < min){
            min = number[i];
            }
    }
    return min;
}

let x = document.querySelector('.x');
let button_min = document.querySelector('.button_min');
let result_min = document.querySelector('.res_min');

button_min.onclick = function(){
    result_min.innerHTML = minDigit(x.value);
}

function pluralizeRecords(n) {
    let str;
    if (n%10==1 & n%100!= 11){
        str = "В результате выполнения запроса была найдена " +  n  + " запись."
    }
    else if ((n%10==2 | n%10==3 | n%10==4) & n%100!=12 & n%100!=13 & n%100!=14){
        str = "В результате выполнения запроса были найдены " +  n  + " записи."
    }
    else if (n%10==0 | n%10==5 | n%10==6 | n%10==7 | n%10==8 | n%10==9 | n%100==11 | n%100==12 | n%100==13 | n%100==14){
        str = "В результате выполнения запроса было найдено " +  n  + " записей."
    }
    return str;
}

let n = document.querySelector('.count');
let button_plur = document.querySelector('.button_plur');
let result_plur = document.querySelector('.res_plur');

button_plur.onclick = function(){
    result_plur.innerHTML = pluralizeRecords(n.value);
}

function fibb(n) {
    var fib = [1, 1];
    
    for (let i = 2; i < n; i++) {
      fib[i] = fib[i - 2] + fib[i - 1];
    }
    return fib[n - 1];
}

let f = document.querySelector('.num_fib');
let button_fib = document.querySelector('.button_fib');
let result_fib = document.querySelector('.res_fib');

button_fib.onclick = function(){
    result_fib.innerHTML = fibb(f.value);
}