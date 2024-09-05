export const currency = (money) => {
    return new Intl.NumberFormat("id-ID", {
        // minimumFractionDigits: 2,
        minimumFractionDigits: money % 1 === 0 ? 0 : 2,
    }).format(money);
};
