document.addEventListener("DOMContentLoaded", function () {
  // Exemplo de preenchimento da lista de gastos
  const expensesList = document.getElementById("expensesList");
  const expenses = [
    { descricao: "Compras no mercado", valor: 50, data: "2023-05-28", categoria: "Alimentação" },
    // Adicione mais gastos aqui
  ];

  expenses.forEach((expense) => {
    const li = document.createElement("li");
    li.textContent = `${expense.descricao} - R$${expense.valor} - ${expense.data} - ${expense.categoria}`;
    expensesList.appendChild(li);
  });

  // Exemplo de gráfico de gastos
  const ctx = document.getElementById("expensesChart").getContext("2d");
  const chart = new Chart(ctx, {
    type: "line",
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "Gastos",
          data: [65, 59, 80, 81, 56, 55, 40],
          borderColor: "rgba(231, 76, 60, 1)",
          backgroundColor: "rgba(231, 76, 60, 0.2)",
        },
      ],
    },
    options: {},
  });
});
