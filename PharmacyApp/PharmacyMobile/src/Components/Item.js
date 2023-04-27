import { StyleSheet, View, Text, Image, Button } from "react-native";


function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLon = deg2rad(lon2-lon1); 
  var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ; 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  var d = R * c; // Distance in km
  return d;
}

const Item = (props) => {
  const { name,address,phone1,latitude,longtiude } = props
  return (

      <View style={styles.item}>
        <Image source={require("../../assets/pharmacy-logo.png")} style={styles.image} />
        <View style={styles.textContainer}>
          <Text style={styles.title}>{name}</Text>
          <Text style={styles.address}>{address}</Text>
          <Text style={styles.phone}>{phone1}</Text>
      </View>
    </View>
  );
}
const styles = StyleSheet.create({

  item: {

    alignItems: 'center',
    flexDirection: 'row',
    paddingVertical: 8,
    paddingHorizontal: 16,
    backgroundColor: "#fefefe",
  
    borderBottomColor: "green",
    borderBottomWidth: 3
    // borderRadius: 26,

  },
  textContainer: {
    flex: 1,
    
    justifyContent: 'center',
    marginStart: 20
  },
  title: {
    fontSize: 20,
    color: "green",


  },
  image: {
    width: 55,
    height: 55,
  },
  address: {
    fontSize: 16,
  },
  phone: {
    fontSize: 14,
    color: 'blue',
    textDecorationLine: 'underline',
  },

})
export default Item;