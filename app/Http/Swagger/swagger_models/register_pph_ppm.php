<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-pph-ppm",
  *      operationId="browseR.IN.21-RegisterTamuPosPelayananHukumdanPenerimaanPengaduanMasyarakat(PPHdanPPM)",
  *      tags={"register-pph-ppm"},
  *      summary="Browse R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM)",
  *      description="Returns list of R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM)",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/register-pph-ppm/read?slug=register-pph-ppm&id={id}",
  *      operationId="readR.IN.21-RegisterTamuPosPelayananHukumdanPenerimaanPengaduanMasyarakat(PPHdanPPM)",
  *      tags={"register-pph-ppm"},
  *      summary="Get R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM) based on id",
  *      description="Returns R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM) based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/register-pph-ppm/add",
  *      operationId="addR.IN.21-RegisterTamuPosPelayananHukumdanPenerimaanPengaduanMasyarakat(PPHdanPPM)",
  *      tags={"register-pph-ppm"},
  *      summary="Insert new R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM)",
  *      description="Insert new R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM) into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nama petugas":"Abc", "waktu":"2021-01-01T00:00:00.000Z", "identitas":"Abc", "nama organisasi":"Abc", "informasi":"Abc", "surat":"Abc", "tanda tangan":"Abc", "keterangan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-pph-ppm/edit",
  *      operationId="editR.IN.21-RegisterTamuPosPelayananHukumdanPenerimaanPengaduanMasyarakat(PPHdanPPM)",
  *      tags={"register-pph-ppm"},
  *      summary="Edit an existing R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM)",
  *      description="Edit an existing R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM)",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nama petugas":"Abc", "waktu":"2021-01-01T00:00:00.000Z", "identitas":"Abc", "nama organisasi":"Abc", "informasi":"Abc", "surat":"Abc", "tanda tangan":"Abc", "keterangan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-pph-ppm/delete",
  *      operationId="deleteR.IN.21-RegisterTamuPosPelayananHukumdanPenerimaanPengaduanMasyarakat(PPHdanPPM)",
  *      tags={"register-pph-ppm"},
  *      summary="Delete one record of R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM)",
  *      description="Delete one record of R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM)",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-pph-ppm",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-pph-ppm/delete-multiple",
  *      operationId="deleteMultipleR.IN.21-RegisterTamuPosPelayananHukumdanPenerimaanPengaduanMasyarakat(PPHdanPPM)",
  *      tags={"register-pph-ppm"},
  *      summary="Delete multiple record of R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM)",
  *      description="Delete multiple record of R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM)",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-pph-ppm",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-pph-ppm/sort",
  *      operationId="sortR.IN.21-RegisterTamuPosPelayananHukumdanPenerimaanPengaduanMasyarakat(PPHdanPPM)",
  *      tags={"register-pph-ppm"},
  *      summary="Sort existing R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM)",
  *      description="Sort existing R.IN.21 - Register Tamu Pos Pelayanan Hukum dan Penerimaan Pengaduan Masyarakat (PPH dan PPM)",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-pph-ppm",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "nama petugas":"Abc", "waktu":"2021-01-01T00:00:00.000Z", "identitas":"Abc", "nama organisasi":"Abc", "informasi":"Abc", "surat":"Abc", "tanda tangan":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "nama petugas":"Abc", "waktu":"2021-01-01T00:00:00.000Z", "identitas":"Abc", "nama organisasi":"Abc", "informasi":"Abc", "surat":"Abc", "tanda tangan":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="nama petugas"), 
  *                         @OA\Property(type="string", property="waktu"), 
  *                         @OA\Property(type="string", property="identitas"), 
  *                         @OA\Property(type="string", property="nama organisasi"), 
  *                         @OA\Property(type="string", property="informasi"), 
  *                         @OA\Property(type="string", property="surat"), 
  *                         @OA\Property(type="string", property="tanda tangan"), 
  *                         @OA\Property(type="string", property="keterangan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */