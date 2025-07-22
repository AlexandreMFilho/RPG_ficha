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

import branca from "@/assets/imgs/Branca.png";
import azul from "@/assets/imgs/Azul.png";
import preta from "@/assets/imgs/Preta.png";
import vermelha from "@/assets/imgs/Vermelha.png";
import verde from "@/assets/imgs/Verde.png";

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
        height: "80%",
        width: "260px",
        position: "relative",
      }}
    >
      <div style={{ width: "100%", height: "260px" }}>
        <Radar data={data} options={options} />
      </div>

      {/* Imagens posicionadas com estilo semelhante ao Blade */}
      <img
        src={branca}
        alt="Branca"
        style={{
          width: "40px",
          borderRadius: "8px",
          position: "absolute",
          top: "-40px",
          left: "55px",
        }}
      />
      <img
        src={azul}
        alt="Azul"
        style={{
          width: "40px",
          borderRadius: "8px",
          position: "absolute",
          top: "40px",
          right: "20px",
        }}
      />
      <img
        src={preta}
        alt="Preta"
        style={{
          width: "40px",
          borderRadius: "8px",
          position: "absolute",
          bottom: "-30px",
          left: "25px",
        }}
      />
      <img
        src={vermelha}
        alt="Vermelha"
        style={{
          width: "40px",
          borderRadius: "8px",
          position: "absolute",
          bottom: "-30px",
          left: "-15px",
        }}
      />
      <img
        src={verde}
        alt="Verde"
        style={{
          width: "40px",
          borderRadius: "8px",
          position: "absolute",
          bottom: "-20px",
          right: "55px",
        }}
      />
    </div>
  );
};

export default AlinhamentoChart;
