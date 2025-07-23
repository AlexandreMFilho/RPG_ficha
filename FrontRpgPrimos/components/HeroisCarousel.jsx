import React from "react";
import { Carousel } from "primereact/carousel";
import './HeroisCarousel.css'; // Assuming you have a CSS file for styling

const HeroisCarousel = ({ herois = [] }) => {
    const itemTemplate = (heroi, index) => (
        <a href={heroi.link || "#"} key={index}>
            <img
                src={heroi.img}
                alt="Personagem"
                className="img-thumbnail"
                width="130"
                style={{ borderRadius: "100px" }}
            />
        </a>
    );

    return (
        <div
            style={{
                display: "flex",
                flexDirection: "column",
                justifyContent: "space-around",
                alignItems: "flex-start",
                border: "1px solid blue",
                color: "black",
                backgroundColor: "gray",
            }}
        >
            <div>
                <h4>Heróis</h4>
            </div>
            <div id="carousel" style={{ width: "100%" }}>
                <Carousel
                    value={herois}
                    itemTemplate={itemTemplate}
                    numVisible={3}
                    numScroll={1}
                    circular
                    autoplayInterval={5000}
                    pt={{
                        previousButton: {
                            className: "text-black",
                        },
                        nextButton: {
                            className: "text-black",
                        },
                    }}
                />

            </div>
        </div>
    );
};

export default HeroisCarousel;
