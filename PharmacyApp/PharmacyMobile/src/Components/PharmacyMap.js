import { ActivityIndicator, Button, Linking, StyleSheet } from "react-native";
import { Text, View } from "react-native";
import MapView from "react-native-maps";
import { Marker } from 'react-native-maps';
import { useState } from "react";
import ReportPharmacy from "./ReportPharmacy";
import { EvilIcons } from '@expo/vector-icons';
import { Feather } from '@expo/vector-icons';









const PharmacyMap = ({ route, }) => {
  const { name, description, latitude, longitude, phone1, address, id, ville, distance, report_count } = route.params;

  const pharmacyRegion = {
    latitude: parseFloat(latitude),
    longitude: parseFloat(longitude),
    latitudeDelta: 0.01,
    longitudeDelta: 0.01,
  };

  const handleSaveIpAddress = async () => {
    await saveIpAddress();
  };

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
        <Text style={styles.pharmacyName}> {name} <Text style={styles.city} >{ville}</Text></Text>

        <Text style={styles.pharmacyWebsite}>
          <Text style={styles.mainTitle}><EvilIcons name="location" size={20} color="black" />Address </Text>: {address}
        </Text>
        <Text style={styles.pharmacyDescription}><Text style={styles.mainTitle}>
          Description</Text>: {description}</Text>
        <Text style={styles.pharmacyDescription}><Text style={styles.mainTitle}>
          Distance</Text>: {distance.toFixed(2)} KM</Text>

        <View style={styles.buttonSection}>
          {report_count >= 5 ? <View style={styles.enPermanence}><Text style={styles.enPermanenceText}>Pharmacie En permanence</Text></View> : <ReportPharmacy id={id} />
          }
          <View style={styles.callBtn}>
            <Feather name="phone-call" size={19} color="white" style={styles.iconCall} />
            <Button title="Call" color={"red"} onPress={() => {
              Linking.openURL(`tel:${phone1}`)
            }} />
          </View>
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
  callBtn: {
    backgroundColor: "red",
    flexDirection: "row",
    alignItems: "center",
  },
  iconCall: {
    padding: 2,
  },
  buttonSection: {
    marginVertical: 10,
    flexDirection: "row",
    justifyContent: "space-between"
  },
  pharmacyDescription: {

  },
  enPermanence: {
    flex: 1,
    fontSize: 16,
    backgroundColor: "#153462",

    textAlign: "center",
    justifyContent: "center",
    // borderRadius: 8,
    alignItems: "center"
  },
  enPermanenceText: {
    color: "white",
    fontWeight: "bold"
  },
  pharmacyName: {
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
    color: "blue"
  },
  city: {
    color: "#03C988",
    fontSize: 15
  }

})
export default PharmacyMap;