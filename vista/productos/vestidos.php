<style>/* Globales */
*::after,
*::before,
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



.icon-cart{
    width: 40px;
    height: 40px;
    stroke: #000;
}

.icon-cart:hover{
    cursor: pointer;
}

img{
    max-width: 100%;
}

/* Header */
header{
    display: flex;
    justify-content: space-between;
    padding: 30px 0 40px 0;
}

.container-icon{
    position: relative;
}

.count-products{
    position: absolute;
    top: 55%;
    right: 0;

    background-color: #000;
    color: #fff;
    width: 25px;
    height: 25px;

    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
}

#contador-productos{
    font-size: 12px;
}

.container-cart-products{
    position: absolute;
    top: 50px;
    right: 0;

    background-color: #fff;
    width: 400px;
    z-index: 1;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.20);
    border-radius: 10px;
    
}

.cart-product{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 30px;

    border-bottom: 1px solid rgba(0, 0, 0, 0.20);

}

.info-cart-product{
    display: flex;
    justify-content: space-between;
    flex: 0.8;
}

.titulo-producto-carrito{
    font-size: 20px;
}

.precio-producto-carrito{
    font-weight: 700;
    font-size: 20px;
    margin-left: 10px;
}

.cantidad-producto-carrito{
    font-weight: 400;
    font-size: 20px;
}

.icon-close{
    width: 25px;
    height: 25px;
}

.icon-close:hover{
    stroke: red;
    cursor: pointer;
}

.cart-total{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px 0;
    gap: 20px;
}

.cart-total h3{
    font-size: 20px;
    font-weight: 700;
}

.total-pagar{
    font-size: 20px;
    font-weight: 900;
}

.hidden-cart{
    display: none;
}


/* Main */
.container-items{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.item{
    border-radius: 10px;
}

.item:hover{
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.20);
}

.item img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
    transition: all .5s;
}

.item figure{
    overflow: hidden;
}

.item:hover img{
    transform: scale(1.2);
}

.info-product{
    padding: 15px 30px;
    line-height: 2;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.price{
    font-size: 18px;
    font-weight: 900;
}

.info-product button{
    border: none;
    background: none;
    background-color: #000;
    color: #fff;
    padding: 15px 10px;
    cursor: pointer;
}

.cart-empty{
    padding: 20px;
    text-align: center;
}


.hidden{
    display: none;
}</style>

<!-- CARRO DE COMPRAS -->
<br><br><br><br><br><br>
<div class="container-icon">
    <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="icon-cart"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
        />
    </svg>
    <div class="count-products">
        <span id="contador-productos">0</span>
    </div>

    <div class="container-cart-products hidden-cart">
        <div class="cart-product">
            <div class="info-cart-product">
                <span class="cantidad-producto-carrito">1</span>
                <p class="titulo-producto-carrito">Zapatos Nike</p>
                <span class="precio-producto-carrito">$80</span>
            </div>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="icon-close"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        </div>
        <div class="cart-total">
            <h3>Total:</h3>
            <span class="total-pagar">$200</span>
        </div>
    </div>
</div>
</header>
<div class="container-items">
<div class="item">
    <figure>
        <img
            src="public/images/a5.jpeg"
            alt="producto"
        />
    </figure>
    <div class="info-product">
        <h2>vestido strapples</h2>
        <p class="price">$26.000</p>
        <button>Añadir al carrito</button>
    </div>
</div><div class="item">
    <figure>
        <img
            src="public/images/a3.jpeg"
            alt="producto"
        />
    </figure>
    <div class="info-product">
        <h2>Vestido Kylie</h2>
        <p class="price">$49.900</p>
        <button>Añadir al carrito</button>
    </div>
</div>
<div class="item">
    <figure>
        <img
            src="public/images/a4.jpeg"
            alt="producto"
        />
    </figure>
    <div class="info-product">
        <h2>Vestido marmol</h2>
        <p class="price">$26.000</p>
        <button>Añadir al carrito</button>
    </div>
</div>

<div class="item">
    <figure>
        <img
            src="public/images/b1.jpeg"
            alt="producto"
        />
    </figure>
    <div class="info-product">
        <h2>Vestido Maddy</h2>
        <p class="price">$38.000</p>
        <button>Añadir al carrito</button>
    </div>
</div>

</div>
</div>

