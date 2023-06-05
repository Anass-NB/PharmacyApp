import React, { useState } from 'react';
import { View, TextInput, Button, StyleSheet, Text, ScrollView, ActivityIndicator } from 'react-native';
import axios from 'axios';
import UserLocation from './UserLocation';
import i18n from './i18n';

const SearchPharmacy = (props) => {
  const [searchTerm, setSearchTerm] = useState('');
  const [results, setResults] = useState([]);
  const { location, granted } = UserLocation();
  const [loading, setLoading] = useState(false)
  const [error, setError] = useState('');

  const { navigation } = props

  const handleSearch = () => {
    if (searchTerm.trim() === '') {
      setError('Please enter a search term.');
      return;
    }

    setError('');


    setLoading(true)
    axios.post('https://pha.ma/api/search-pharmacy', {
      pharmacy_name: searchTerm,
      longitude: location.longitude,
      latitude: location.latitude,
    })
      .then(response => {
        console.log('====================================');
        console.log('====================================' + location.latitude + " ---- " + location.longitude);
        setResults(response.data.pharmacies)
        setLoading(false)

        console.log('====================================');


      })

      .catch(error => {
        console.error("Error is : " + error);
      });
  };

  return (
    <View style={styles.container}>
      <View style={styles.inputContainer}>
        <TextInput
          style={styles.input}
          placeholder={i18n.t("search_for_a_pharmacy")}
          placeholderTextColor="#999"
          value={searchTerm}
          onChangeText={text => { setSearchTerm(text) }}
        />
        <Button title={i18n.t("Search")} onPress={handleSearch} color="#03C988" />

      </View>
      {error ? (
        <Text style={styles.errorText}>{error}</Text>
      ) : null}
      {loading ? <ActivityIndicator size={"large"} color={"#03C988"} /> : (
        <ScrollView style={styles.resultsContainer}>
          {results.map(item => (
            <View key={item.id} style={styles.resultItem}>
              <Text style={styles.resultName}>{i18n.t("PharmacyName")} : {item.name}</Text>
              <Text style={styles.resultCity}>{i18n.t("city")} : {item.ville}</Text>
              <Text style={styles.resultAddress}>{i18n.t("address")} : {item.address}</Text>
              {/* <Text style={styles.resultName}>{result.report_count}</Text> */}
              <Text>{i18n.t("Phone_number")} : {item.phone1}</Text>
              <Text style={styles.resultDistance}>{i18n.t("distance")} : {parseFloat(item.distance).toFixed(2)} KM</Text>
              <Button title={i18n.t("Display_More_Details")} onPress={() => navigation.navigate("Map", item)} color="#03C988" />
            </View>
          ))}
        </ScrollView>)}

    </View>
  );
};


const styles = StyleSheet.create({
  container: {
    flex: 1,
    padding: 16,
  },
  inputContainer: {
    flexDirection: 'row',
    alignItems: 'center',
    marginBottom: 16,
  },
  input: {
    flex: 1,
    height: 40,
    borderColor: '#03C988',
    borderWidth: 1,
    borderRadius: 8,
    paddingHorizontal: 10,
    color: '#000',
    marginRight: 10,
  },
  resultsContainer: {
    flex: 1,
  },
  resultItem: {
    backgroundColor: '#fff',
    padding: 16,
    marginBottom: 10,
    borderRadius: 8,
  },
  resultName: {
    fontSize: 16,
    fontWeight: 'bold',
    marginBottom: 8,
  },
  errorText: {
    color: 'red',
    marginBottom: 10,
  },
});

export default SearchPharmacy;
