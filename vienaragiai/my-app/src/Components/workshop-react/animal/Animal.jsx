const Animals = ({urlas, name}) => {
    function randColor() {
      return (
        "#" +
        Math.floor(Math.random() * 16777215)
          .toString(16)
          .padStart(6, "0")
      );
    }
    return (
      <>
      <figure>
        <img style={{width: "50%"}}
         src={urlas} 
         alt={name}/>
         <figcaption style={{backgroundColor: randColor()}}>{name}</figcaption>
      </figure>
      </>
    );
  };
  
  export default Animals;