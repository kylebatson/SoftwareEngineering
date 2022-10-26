<!DOCTYPE html>
<html>

<head>
    <title> Calculator</title>
    @vite(['resources/css/app.css', 'resources/js/test.js'])
</head>
<style>
    body {
        background-color: #619deba3;
        background-image: url("../../images/back.jpeg");
    }



    #topBar {
        height: 7vh;
        width: 100vw;
        background-color: #4f4e5c;
        display: flex;
        flex-direction: row-reverse;
        align-items: center;
    }

    #topBar>* {
        margin-right: 1rem;
    }

    .containerC {
        text-align: center;
        margin: 3rem;
        padding: 1px 200px;
        justify-content: center;
        /* transform:translateX(-50%); */
    }

    .containerC>form {
        font-size: 20px;
        background-color: antiquewhite;
        margin: 10px;
        padding: 10px 10px 10px 10px;
        border-radius: 10px;
        border: 3px solid;
        width: 100%;
        height: 410px;
        box-sizing: border-box;
        text-align: center;
        position: static;
    }

    input {
        width: 20%;
        border: 3px solid;
        border-radius: 8px;
    }

    button {
        margin-top: 10px;
        padding: 10px 20px;
    }

    input {
        display: inline;
        margin: 10px auto;
        padding: 10px 20px;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        /* -webkit-appearance: none;  */
        margin: 0;
    }
</style>

<body>
    @auth
        <div id="topBar">
            <div>Contact Us</div>
            <div>About Us</div>
            <a href="{{ 'catalog/' }}" class="ml-4 text-lg">Catalog</a>
            <a href="{{ route('dashboard') }}" class="ml-4 text-lg">Dashboard</a>
            <a href="{{ url('/') }}" class="ml-4 text-lg">Home</a>

        </div>
        <div class="containerC">
            <h1 style="font-weight: bold; color: whitesmoke; font-size: 3rem"> Calculator</h1>
            <form>
                Length of Roof: <input type="number" required id="firstNumber" min="1" oninput="this.value = Math.abs(this.value)"/>
                ft&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Width of Roof : <input type="number" required id="secondNumber" min="1" oninput="this.value = Math.abs(this.value)" /> ft<br>
                Area of roof : <input type="textbox" required id="thirdNumber" min="1"
                    disabled />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
                Recommended Units : <input type="textbox" required id="fourthNumber" min="1" disabled/><br>
                {{-- <span input type="label" id="result"> Area to be covered: &nbsp;&nbsp;&nbsp;</span><input
                    type="textbox" id="Total" disabled><br> --}}
                <span input type="label" id="fTotal">Total For Solar Panel: </span>
                <input type="textbox" id="final"
                    disabled><br>
                {{-- <input type="button" onClick="multiplyBy()" Value="Calculate" /><br> --}}
            </form>

            <p>
            </p>
        </div>

        <script>
            const Length = document.getElementById("firstNumber");
            const Width = document.getElementById("secondNumber");

            Length.addEventListener('change', (event) => {
                setArea();
            });
            Width.addEventListener('change', (event) => {
                setArea();
            });

            function multiplyBy() {
                num1 = document.getElementById("firstNumber").value;
                num2 = document.getElementById("secondNumber").value;
                num3 = document.getElementById("thirdNumber").value;
                num4 = document.getElementById("fourthNumber").value;
                var result = num1 * num2;
                var fTotal = result * (num3 * num4)
                document.getElementById("Total").value = result;
                document.getElementById("final").value = fTotal;

                //.innerHTML = num1 * num2
            }

            function setArea() {
                if (Length.value !== null && Length.value !== 0 && Width.value != null && Width.value != 0) {
                    const area = Length.value * Width.value;
                    document.getElementById("thirdNumber").value = area;
                    const amnt = area/10;
                    document.getElementById("fourthNumber").value = Math.floor(amnt);
                    const total = amnt * 3500;
                    document.getElementById("final").value = total.toFixed(2);

                }
            }
        </script>
    @endauth
</body>

</html>
