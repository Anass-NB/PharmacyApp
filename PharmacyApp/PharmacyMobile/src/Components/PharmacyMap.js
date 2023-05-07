import { ActivityIndicator, Button, Linking, StyleSheet } from "react-native";
import { Text, View  } from "react-native";
import MapView from "react-native-maps";
import { Marker } from 'react-native-maps';
import UserLocation from "./UserLocation";


const calculateDistance = (lat1, lon1, lat2, lon2) => {
  const R = 6371; // Earth's radius in kilometers
  const dLat = toRadians(lat2 - lat1);
  const dLon = toRadians(lon2 - lon1);
  const a =
    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.cos(toRadians(lat1)) * Math.cos(toRadians(lat2)) *
    Math.sin(dLon / 2) * Math.sin(dLon / 2);
  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  const distance = R * c;
  return distance.toFixed(2);
};
const toRadians = (degrees) => {
  return degrees * Math.PI / 180;
};

const PharmacyMap = ({ route, navigation }) => {
  const { name, description, latitude, longtiude, phone1, website } = route.params;
  const pharmacyRegion = {
    latitude: latitude,
    longitude: longtiude,
    latitudeDelta: 0.922,
    longitudeDelta: 0.421,
  };
  const userLoc = UserLocation()

  return (
    <View style={styles.container}>

      <MapView
        style={styles.map}
        initialRegion={pharmacyRegion}
      >
        <Marker
          coordinate={pharmacyRegion}
          pinColor="green"
          title={name}
          description={description}
          image={require("../../assets/pha-marker.png")}
        />
      </MapView>

      <View style={{ margin: 10 }}>
        <Text style={styles.pharmacyName}> {name}</Text>
 
        
        <Text style={styles.pharmacyWebsite}onPress={() => {
          Linking.openURL(website);
        }}><Text style={styles.mainTitle}>Website </Text>: {website}</Text>
               <Text style={styles.pharmacyDescription}><Text style={styles.mainTitle}>Description</Text>: {description}</Text>
        <Text>
          {userLoc ?"Distance : " +  calculateDistance(userLoc.latitude,userLoc.longitude,latitude,longtiude) + " KM"  : <ActivityIndicator size="small" color="#03C988" />
}
        </Text>
        <View style={styles.buttonSection}>
          <Button
            title="déclarer cette pharmacie en permanence"
            color="#03C988"
            accessibilityLabel="Learn more about this purple button"
          />
          <Button title="Call" color="black" onPress={() => {
            Linking.openURL(`tel:${phone1}`)
          }} />
        </View>
      </View>


    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#fff"
  },

  map: {
    height: "50%",
    width: "100%",

  },
  buttonSection: {
    marginVertical: 10,
    flexDirection: "row",
    justifyContent: "space-between"
  },
  pharmacyDescription:{
  
  }
  , pharmacyName: {
    fontSize: 22,
    borderBottomColor: "green",
    borderBottomWidth: 2,
    paddingBottom: 15,
    margin: 6
  },
  mainTitle: {
    fontSize: 15,
    color: "#03C988"
  },
  pharmacyWebsite: {
    color:"blue"
  }

})
export default PharmacyMap;