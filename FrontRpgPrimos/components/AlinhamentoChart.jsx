import React from "react";
import { Radar } from "react-chartjs-2";
import {
  Chart as ChartJS,
  RadialLinearScale,
  PointElement,
  LineElement,
  Filler,
  Tooltip,
  Legend,
} from "chart.js";

import branca from "../src/assets/imgs/Branca.png";
import azul from "../src/assets/imgs/Azul.png";
import preta from "../src/assets/imgs/Preta.png";
import vermelha from "../src/assets/imgs/Vermelha.png";
import verde from "../src/assets/imgs/Verde.png";

ChartJS.register(
  RadialLinearScale,
  PointElement,
  LineElement,
  Filler,
  Tooltip,
  Legend
);

const AlinhamentoChart = ({ cores = [] }) => {
  const valores = [
    (cores[0]["Branca"] || 0) + 10,
    (cores[1]["Azul"] || 0) + 10,
    (cores[2]["Preta"] || 0) + 10,
    (cores[3]["Vermelha"] || 0) + 10,
    (cores[4]["Verde"] || 0) + 10,
  ];

  const data = {
    labels: ["", "", "", "", ""],
    datasets: [
      {
        label: "Alinhamento",
        data: valores,
        backgroundColor: "rgba(55, 0, 255, 0.72)",
        borderColor: "rgba(55, 0, 255, 1)",
        borderWidth: 3,
      },
    ],
  };

  const options = {
    plugins: {
      legend: { display: false },
    },
    scales: {
      r: {
        beginAtZero: true,
        ticks: { display: false },
        grid: { color: "#ccc" },
        pointLabels: { display: false },
      },
    },
    maintainAspectRatio: false,
  };

  return (
    <div
      style={{
        display: "flex",
        alignItems: "center",
        justifyContent: "center",
        height: "300px",
        width: "300px",
        position: "relative",
        border: "2px solid #ccc",
        backgroundColor: "rgba(255, 255, 255, 0.39)",
      }}
    >
      <div style={{ width: "100%", height: "250px" }}>
        <Radar data={data} options={options} />
      </div>

      {/* Imagens posicionadas com estilo semelhante ao Blade */}
      <img
        src={branca}
        alt="Branca"
        style={{
          width: "30px",
          borderRadius: "8px",
          position: "absolute",
          top: "0px",
          left: "134px",
        }}
      />
      <img
        src={azul}
        alt="Azul"
        style={{
          width: "30px",
          borderRadius: "8px",
          position: "absolute",
          top: "90px",
          right: "10px",
        }}
      />
      <img
        src={preta}
        alt="Preta"
        style={{
          width: "30px",
          borderRadius: "8px",
          position: "absolute",
          bottom: "30px",
          left: "54px",
        }}
      />
      <img
        src={vermelha}
        alt="Vermelha"
        style={{
          width: "30px",
          borderRadius: "8px",
          position: "absolute",
          bottom: "170px",
          left: "10px",
        }}
      />
      <img
        src={verde}
        alt="Verde"
        style={{
          width: "30px",
          borderRadius: "8px",
          position: "absolute",
          bottom: "30px",
          right: "55px",
        }}
      />
    </div>
  );
};

export default AlinhamentoChart;
