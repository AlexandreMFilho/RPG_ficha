// AtributosCard.jsx
import React from "react";
import { Card } from "primereact/card";

const AtributosCard = ({ atributos = [] }) => {
  const pares = [];

  for (let i = 0; i < atributos.length; i += 2) {
    pares.push([atributos[i], atributos[i + 1]]);
  }

  return (
    <Card
      title="Atributos"
      style={{
        height: "100%",
        width: "300px",
        maxHeight: "300px",
      }}
    >
      <table style={{ borderCollapse: "collapse" }}>
        <tbody>
          {pares.length > 0 ? (
            pares.map((par, index) => (
              <tr key={index}>
                <td style={{  verticalAlign: "middle" }}>
                  <strong>{par[0]?.nomeAtributo}:</strong>{" "}
                  {par[0]?.valorAtributo}
                </td>
                <td style={{ verticalAlign: "middle" }}>
                  {par[1] && (
                    <>
                      <strong>{par[1]?.nomeAtributo}:</strong>{" "}
                      {par[1]?.valorAtributo}
                    </>
                  )}
                </td>
              </tr>
            ))
          ) : (
            <tr>
              <td colSpan="2" style={{ textAlign: "center" }}>
                Nenhum atributo disponível.
              </td>
            </tr>
          )}
        </tbody>
      </table>
    </Card>
  );
};

export default AtributosCard;
