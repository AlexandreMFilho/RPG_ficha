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
                width="150"
                style={{ borderRadius: "100px" }}
            />
        </a>
    );

    return (
        <div
            style={{
                display: "flex",
                flexDirection: "column",
                justifyContent: "flex-start",
                alignItems: "flex-start",
                color: "black",
                // backgroundColor: "gray",
                width: '100%', // Ensure the parent takes up full width of its container
                padding: '10px', // Add some padding for spacing
                width: '100%',
            }}
            className="card primary-color"
        >
            <h2>Heróis</h2>
            <div id="carousel" style={{ width: "100%", overflow: "hidden" }}>
                <Carousel
                    value={herois}
                    itemTemplate={itemTemplate}
                    numVisible={3}
                    numScroll={1}
                    circular


                    pt={{
                    previousButton: {
                        style: {
                            backgroundColor: 'blue',
                            color: 'white',
                            borderRadius: '50%',
                            label: 'Anterior'
                        }
                    },
                    nextButton: {
                        style: {
                            backgroundColor: 'blue',
                            color: 'white',
                            borderRadius: '50%',
                            icon: 'pi pi-chevron-right'
                        }
                    }
            }}
/>
            </div>
        </div>
    );
};

export default HeroisCarousel;
