import { formatearDinero } from "../utils/bolsaUtils.js";

const inputIngresos = document.getElementById("salario") as HTMLInputElement;
const divResultado = document.getElementById("resultado") as HTMLDivElement;
const pNecesidades = document.getElementById(
    "calculadora-necesidades-texto"
) as HTMLParagraphElement;
const pCaprichos = document.getElementById(
    "calculadora-caprichos-texto"
) as HTMLParagraphElement;
const pAhorros = document.getElementById(
    "calculadora-ahorros-texto"
) as HTMLParagraphElement;
const checkboxTiempo = document.getElementById(
    "checkbox-calculadora"
) as HTMLInputElement;
let calculoAnual: boolean = false;

inputIngresos.addEventListener("input", calcuarDatos);

checkboxTiempo.addEventListener("change", (event) => {
    calculoAnual = (event.target as HTMLInputElement).checked;
    calcuarDatos();
});

function calcuarDatos(): void {
    const ingresos: number = Number(inputIngresos.value);

    if (ingresos > 0 && calculoAnual === false) {
        pNecesidades.textContent = `${formatearDinero(ingresos * 0.5)} €`;
        pCaprichos.textContent = `${formatearDinero(ingresos * 0.3)} €`;
        pAhorros.textContent = `${formatearDinero(ingresos * 0.2)} €`;
    } else if (ingresos > 0 && calculoAnual === true) {
        pNecesidades.textContent = `${formatearDinero(ingresos * 0.5 * 12)} €`;
        pCaprichos.textContent = `${formatearDinero(ingresos * 0.3 * 12)} €`;
        pAhorros.textContent = `${formatearDinero(ingresos * 0.2 * 12)} €`;
    } else {
        pNecesidades.textContent = `0 €`;
        pCaprichos.textContent = `0 €`;
        pAhorros.textContent = `0 €`;
    }
}
